<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class UserController extends CI_Controller{

		public function __construct(){

			parent:: __construct();
			$this->load->model('AuthenticationModel');
			$this->load->model('Marker_Model');
			$this->load->model('Product_Models');
			$this->load->model('UserModel');
			$this->load->model('Template_Model');

			//checking if user||admin
			$this->AuthenticationModel->check_isUsers();
		}
		public function myAccount($id){
			$data['info'] = $this->UserModel->editInfo($id);
			$data['cart'] = $this->UserModel->getCart('cart');

			$data['order'] = $this->UserModel->getOrdr('order');//ALL
			$data['pending'] = $this->UserModel->getPending('pending');
			$data['toShip'] = $this->UserModel->getToship('toShip');
			$data['delievered'] = $this->UserModel->getDelievered('delievered');
			$data['completed'] = $this->UserModel->getcompleted('completed');
			$data['cancel'] = $this->UserModel->getCancel('cancel');
			
			/*
			echo '<pre>';  print_r($this->UserModel->getToship('toShip'));
			echo '<pre>';
			die('here'); 
			*/
			
			$this->load->view('myAccount',  $data);
			//$this->load->view('template/footer');
			
		}


		public function editMyAccount($id){
			$data['info'] = $this->UserModel->editInfo($id);
			$data['cart'] = $this->UserModel->getCart('cart');

			$data['order'] = $this->UserModel->getOrdr('order');//ALL
			$data['pending'] = $this->UserModel->getPending('pending');
			$data['toShip'] = $this->UserModel->getToship('toShip');
			$data['delievered'] = $this->UserModel->getDelievered('delievered');
			$data['cancel'] = $this->UserModel->getCancel('cancel');
			/*
			echo '<pre>';  print_r($this->UserModel->getPending('pending'));
			echo '<pre>';
			die('here'); 
			*/
			$this->load->view('editMyAccount',  $data);
		}

		public function displayUser($id){
			$data['info'] = $this->UserModel->getMyInfo('info');
			$displayOrder['order'] = $this->UserModel->getOrdr('order');
			$this->load->view('myAccount',  $data, $displayOrder);
		}

		
		public function updatedInfo($id){
			$old_filename = $this->input->post('old_user_avtar');
			$new_filename = $_FILES["user_avtar"]["name"]; 

			if($new_filename == TRUE){

				$update_filename = time()."".str_replace(' ', '-', $_FILES['user_avtar']['name']);
				$config = [
				'upload_path' => 'upload/selfie/',
				'allowed_types' => 'png|jpg|gif|jpeg',
				'file_name' => $update_filename,
				];

				$this->load->library('upload', $config);
				if($this->upload->do_upload('user_avtar')){
					if(file_exists("upload/selfie/".$old_filename)){

						unlink("upload/selfie/".$old_filename);
					}
				}
			} else {
				$update_filename = $old_filename;
			}
				$data = [
					'email' 		=> $this->input->post('email'),
					'password' => $this->input->post('password'),
					'fname' 		=> $this->input->post('fname'),    
					'lname' 		=> $this->input->post('lname'),   
					'number' 	=> $this->input->post('number'),   
					'user_avtar' 		=> $update_filename
				];
				$userInfo = new UserModel;
				$userInfo->updateInfo($data, $id);
				/*
				echo '<pre>';  print_r($data);
				echo '<pre>';
				die('here'); 
				*/
				$this->session->set_flashdata('status', 'Information Updated Successfully');
				redirect(base_url('editMyAccount/'. $id));

		}
		public function Address($id){
			$data = [
				'Street' 		=> $this->input->post('Street'),
				'Provice' => $this->input->post('Provice'),
				'Municipality' 		=> $this->input->post('Municipality'),    
				'Barangay' 		=> $this->input->post('Barangay'),   
				'OtherAddress' 	=> $this->input->post('OtherAddress'),   
			];
			$userInfo = new UserModel;
			$userInfo->updateInfo($data, $id);
			/*
			echo '<pre>';  print_r($data);
			echo '<pre>';
			die('here'); 
			*/
			$this->session->set_flashdata('Address', 'Address Updated Successfully');
			$this->session->set_flashdata('status', 'Address Updated Successfully');
			redirect(base_url('editMyAccount/	'. $id));
		}


		public function delete($id){

			$user = new UserModel;
			$user->deleteOrder($id);
			$this->session->set_flashdata('status', 'Cart Item Deleted Successfully!');
			redirect(base_url('myCart/1'));
		}
		
		public function orderDelete($id){  

			$Cancel = 'Cancelled';
			date_default_timezone_set('Asia/Manila'); 
			  
			$current_date = date('Y-m-d h:i A'); 
			$date = date('Y-m-d h:i A', strtotime($current_date));

			$data = [
				'Status' 		=> $Cancel,
				'date_cancel' =>$date
			];

			$user = new UserModel;
			$user->cancelOrder($data, $id);
		/*	
			echo '<pre>';  print_r($id);
			echo '<pre>';
			die('here'); 
			*/

			$user_id = $this->session->userdata('auth_user')['user_id']; //to fetch filtered data

			$this->session->set_flashdata('status', 'Cancelled Successfully!');
			redirect(base_url('myCart/'. $user_id));
		}

		public function rateMe($id){
			
			$this->load->view('template/header');
			$this->load->view('products/rate/'. $id);
			$this->load->view('template/footer');
			//redirect(base_url('products/rate/'. $id));
		//	$this->load->view('products/ProductDetails/'. $id);
		}
	}
?>


