<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class RegisterController extends CI_Controller{

		//long method ng autoload
		public function __construct(){
			
			parent::__construct();

			//DIRECT TO LAST LOGIN ACCOUNT IF NOT LOGOUT PROPERLY
			if($this->session->has_userdata('authenticated')){
				$this->session->set_flashdata('status','You are already LogIn');
				redirect(base_url('userpage'));
			}

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('UserModel');
		}

		//load default page
		public function index(){
			$this->load->view('auth/register');
		}

		
		public function register(){
			
				$data = $this->input->post();
				
				if(isset( $_FILES) && isset($data)){

					//File - kukunin yung image then generate ng new image name
					$target_directory = "upload/user/";
					$file_name =  $_FILES['user_avtar']['name'];
					$file_tmpname =  $_FILES['user_avtar']['tmp_name'];
					$extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

					// Generate a new file name (random string + original extension).
					$file_new_name = substr(md5(microtime()), rand(0, 25), 8); // Creating a random string
					$file_upload_name = $file_new_name . "." . $extension;


				
					//print_r($file_upload_name);


					//Data- getting user input
					$unique_id = substr(md5(microtime()), rand(0,25), 6);
					$fname = $data['txt_fname'];
					$lname = $data['txt_lname'];
					$Provice = $data['txt_Provice'];
					$Municipality = $data['txt_Municipality'];
					$Barangay = $data['txt_Barangay'];
					$Street = $data['txt_Street'];
					$OtherAddress = $data['OtherAddress'];
					$email = $data['txt_email'];
					$password = $data['txt_pass'];
					$user_avtar = $file_upload_name;
					$user_status = 'active';
					$number = $data['number'];
					$cpassword = $data['txt_cpass'];
					
					if($cpassword == $password){
						
								//storing in database
					$data = array(
						'number' => $number,
						'unique_id' => $unique_id,
						'fname' => $fname,
						'lname' => $lname,
						'Provice' => $Provice,
						'Municipality' => $Municipality,
						'Barangay' => $Barangay,
						'Street' => $Street,
						'OtherAddress' => $OtherAddress,
						'email' => $email,
						'password' => $password,
						'user_avtar' => $user_avtar,
						'user_status' => $user_status

					);

						//Validation of email
					$email = $this->UserModel->checkEmail($email);

					if(isset($email[0]['email'])){
						
						$this->session->set_flashdata('Email_Alert', 'Ooops! Emails is already in used.');
						$this->load->view('auth/register', $data);
					}else{
					
						// Move the uploaded file to the target directory.
					if (move_uploaded_file($file_tmpname, $target_directory . $file_upload_name)) {
						//echo "File has been successfully uploaded.";
					} else {
						//echo "Sorry, there was an error uploading your file.";
					}

						$this->UserModel->registerUser($data);
						$this->UserModel->idUpdate();

						move_uploaded_file($file_tmpname, "./upload/".$file_upload_name);//Putting image in file name upload

						$username = $fname." ".$lname;
						$image = $user_avtar;
						$session_arr = array(
							'username' => $username,
							'image' => $image,
							'uniqueid' => $unique_id
						);
						$this->session->set_userdata($session_arr);						
						redirect(base_url('login'));
					}	

					}else{
						$this->session->set_flashdata('Email_Alert', 'Ooops! Password does not match');
						redirect(base_url('register'));
					}
			
				}	
			}
	}
?>



