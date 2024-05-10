<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends CI_Controller{
/*
		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');        */
		//long method ng autoload
		public function __construct(){
			parent:: __construct();
			$this->load->model('AuthenticationModel');
			$this->load->model('UserModel');
			$this->load->model('Template_Model');
			$this->load->model('AdminModel');
			//checking if user||admin
			$this->AuthenticationModel->check_isAdmin();
		}


		//load default page
		public function index(){
		   $arrdata['scharge'] = $this->AdminModel->scharge();
		
			$arrdata['order'] = $this->AdminModel->getNewOrder();
			$arrdata['sales'] = $this->AdminModel->sales();
			$arrdata['alluser'] = $this->AdminModel->alluser();
			
			$arrdata['profit'] = $this->AdminModel->profit();
			$arrdata['top'] = $this->AdminModel->getTopOrderedProducts();
			$arrdata['report'] = $this->AdminModel->report();

			/** AGROCASH - CASH IN */

			$datas['users'] = $this->AdminModel->users();
		





			            //sa filteration ng sales report
			$column = $this->input->get('column'); // Get the selected limit from the dropdown
			$order = $this->input->get('order'); // Get the selected limit from the dropdown

									
			$salesFrom = $this->input->get('salesFrom');
			$salesTo = $this->input->get('salesTo');

			$limit = $this->input->get('limit');
			$limit1 = $this->input->get('limit1');
			$datas['report'] = $this->AdminModel->reportS($column, $order, $limit, $limit1, $salesFrom, $salesTo);

			//TOTAL sales report tables
			$datas['sum_of_sales'] = $this->AdminModel->hasCharge($limit, $limit1, $salesFrom, $salesTo);
            	
            	 if($this->input->post('save'))
    {
     
     $data = [
            'scharge' => $this->input->post('scharge'),
        ];
        
        $this->db->where('id', 1);
        $this->db->update('admin', $data);
    
        // Display success message
        echo 'Order successfully updated';
    
        // Redirect after displaying the message
        redirect(base_url('admindash'));
  
    }

			$this->load->view('admin/adminhead');
			
			$this->load->view('admin/admindash',  [
							//to load defautl value in filters
							'column' => $column,
							'order' =>$order,
							'limit' =>$limit,
							'limit1' =>$limit1,
							'salesFrom' =>$salesFrom,
							'salesTo' => $salesTo,
							'arrdata' => $arrdata,
							'datas' => $datas
			]);
		
  
			
			$this->load->view('admin/adminfooter');
		}
		public function schange() {
         $data['scharge']=$this->input->post('scharge');

        $this->db->where('id', 1);
        $this->db->update('admin', $data);

        // Display success message
        echo 'Order successfully updated';

        // Redirect after displaying the message
        redirect(base_url('adminpage'));
    
}
	

		public function month(){
			$arrdata['order'] = $this->AdminModel->countorder();
			$arrdata['sales'] = $this->AdminModel->sales();
			$arrdata['alluser'] = $this->AdminModel->alluser();
			$arrdata['profit'] = $this->AdminModel->profit();
			$arrdata['top'] = $this->AdminModel->getTopOrderedProducts();
			$arrdata['report'] = $this->AdminModel->report();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/admindash', $arrdata);
			$this->load->view('admin/adminfooter');
			
		}
		public function week(){
			$arrdata['order'] = $this->AdminModel->countorder();
			$arrdata['sales'] = $this->AdminModel->sales();
			$arrdata['alluser'] = $this->AdminModel->alluser();
			$arrdata['profit'] = $this->AdminModel->profit();
			$arrdata['top'] = $this->AdminModel->getTopOrderedProducts();
			$arrdata['report'] = $this->AdminModel->report();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/admindash', $arrdata);
			$this->load->view('admin/adminfooter');
			
		}

		public function edit($id){
			//get the product id to espicifically edit the entire row products
			$this->load->view('template/header');
			$products = new Product_Model;
			$data['product'] = $products->editProduct($id);
			$this->load->view('products/edit', $data);
			$this->load->view('template/footer');
		}

		public function approval(){
			$arrdata['data'] = $this->AdminModel->approva();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminapproval', $arrdata);
			$this->load->view('admin/adminfooter');
		}

		public function forecast(){
			$this->load->model('Forecast_Model');


			$data1 = $this->Forecast_Model->SanClemente();
			$forecast1 = $this->double_exponential_smoothing($data1);

			$data2 = $this->Forecast_Model->Camiling();
			$forecast2 = $this->double_exponential_smoothing($data2);

			$data3 = $this->Forecast_Model->Joined();
			$forecast3 = $this->double_exponential_smoothing($data3);

			$dataProduce = array(
				array('year' => 2010, 'value' => 562180),
				array('year' => 2011, 'value' => 450757),
				array('year' => 2012, 'value' => 549299),
				array('year' => 2013, 'value' => 585077),
				array('year' => 2014, 'value' => 638906),
				array('year' => 2015, 'value' => 570095),
				array('year' => 2016, 'value' => 564992),
				array('year' => 2017, 'value' => 579013),
				array('year' => 2018, 'value' => 568862),
				array('year' => 2019, 'value' => 595463),
				array('year' => 2020, 'value' => 573337),
				array('year' => 2021, 'value' => 605131),
				array('year' => 2022, 'value' => 599577),
				array('year' => 2023, 'value' => null)
		);

		$dataCORN = array( //CORN
				array('year' => 2010, 'value' => 102666),
				array('year' => 2011, 'value' => 100888),
				array('year' => 2012, 'value' => 110633),
				array('year' => 2013, 'value' => 112107),
				array('year' => 2014, 'value' => 122226),
				array('year' => 2015, 'value' => 138616),
				array('year' => 2016, 'value' => 124800),
				array('year' => 2017, 'value' => 124368),
				array('year' => 2018, 'value' => 134945),
				array('year' => 2019, 'value' => 131507),
				array('year' => 2020, 'value' => 141610),
				array('year' => 2021, 'value' => 139405),
				array('year' => 2022, 'value' => 139261),
				array('year' => 2023, 'value' => null)
		);

		$Mango = array( //Mango
				array('year' => 2010, 'value' => 16400),
				array('year' => 2011, 'value' => 16881),
				array('year' => 2012, 'value' => 16881),
				array('year' => 2013, 'value' => 19061),
				array('year' => 2014, 'value' => 15182),
				array('year' => 2015, 'value' => 12130),
				array('year' => 2016, 'value' => 11620),
				array('year' => 2017, 'value' => 6405),
				array('year' => 2018, 'value' => 4916),
				array('year' => 2019, 'value' => 3068),
				array('year' => 2020, 'value' => 3496),
				array('year' => 2021, 'value' => 2620),
				array('year' => 2022, 'value' => 2060),
				array('year' => 2023, 'value' => null)
		);

		$dataBanana = array( //Bnana
				/*array('year' => 2010, 'value' => 4845),
				array('year' => 2011, 'value' => 4909),
				array('year' => 2012, 'value' => 4889),
				array('year' => 2013, 'value' => 4932),
				array('year' => 2014, 'value' => 4195),
				array('year' => 2015, 'value' => 3866),
				array('year' => 2016, 'value' => 3814),
				array('year' => 2017, 'value' => 4592),
				array('year' => 2018, 'value' => 5158),
				array('year' => 2019, 'value' => 5519),
				array('year' => 2020, 'value' => 5855),
				array('year' => 2021, 'value' => 5629),
				array('year' => 2022, 'value' => 5984),
				array('year' => 2023, 'value' => null)*/
				array('year' => 2010, 'value' => 112),
				array('year' => 2011, 'value' => 106),
				array('year' => 2012, 'value' => 109),
				array('year' => 2013, 'value' => 107),
				array('year' => 2014, 'value' => 109),
				array('year' => 2015, 'value' => 108),
				array('year' => 2016, 'value' => 107),
				array('year' => 2017, 'value' => 119),
				array('year' => 2018, 'value' => 149),
				array('year' => 2019, 'value' => 153),
				array('year' => 2020, 'value' => 165),
				array('year' => 2021, 'value' => 185),
				array('year' => 2022, 'value' => 192),
				array('year' => 2023, 'value' => null)
		);
								
		
		$alpha= 0.99;
		

		$forecastrice = $this->singleExponentialSmoothing($dataProduce, $alpha);
		$lastForecastrice = end($forecastrice);
		$dataProduce[count($dataProduce) ]['value'] = $lastForecastrice;
		//$lastForecast = end($forecast);

		$forecast = $this->singleExponentialSmoothing($dataCORN, $alpha);
		$lastForecast = end($forecast);
		$dataCORN[count($dataCORN) ]['value'] = $lastForecast;

		//$alphaM = 0.66231; // Adjust the smoothing parameter as needed
		$forecastMango = $this->singleExponentialSmoothing($Mango, $alpha);
		$lastMango = end($forecastMango);
		$Mango[count($Mango) ]['value'] = $lastMango;

		//$alphaB = 0.66231; // Adjust the smoothing parameter as needed
		$forecastbanana = $this->singleExponentialSmoothing($dataBanana, $alpha);
		$lastbanana = end($forecastbanana);
		$dataBanana[count($dataBanana) ]['value'] = $lastbanana;

			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminforecast', array(
					'data1' => $data1,
					'forecast1' => $forecast1,
					'data2' => $data2,
					'forecast2' => $forecast2,
					'data3' => $data3,
					'forecast3' => $forecast3,


					'dataProduce' => $dataProduce,
					'dataCORN' => $dataCORN,
					'dataBanana' => $dataBanana,
					'Mango'=> $Mango,

					'forecast' => $forecast,
					'forecastrice' => $forecastrice,
					'forecastbanana'=> $forecastbanana,
					'forecastMango' => $forecastMango,
			));
			$this->load->view('admin/adminfooter');
	
			//$this->load->view('CropView', array('data' => $data1, 'forecast' => $forecast));
		}
		private function singleExponentialSmoothing($data, $alpha) {
			$forecast = array();
			$last_value = null;

			foreach ($data as $row) {
					$current_value = $row['value'];

					if ($current_value === null) {
							// If the value is missing, continue with the forecast
							$forecast[] = $last_value;
					} else {
							// Calculate the forecast using the single exponential smoothing formula
							if ($last_value === null) {
									// Initialize the first forecast with the first actual value
									$forecast[] = $current_value;
							} else {
									$forecast[] = $alpha * $current_value + (1 - $alpha) * $last_value;
							}

							$last_value = $forecast[count($forecast) - 1];
					}
			}

			return $forecast;
	}
		private function double_exponential_smoothing($data){
				$alpha = 0.2;  // Smoothing factor for level
				$beta = 0.2;   // Smoothing factor for trend

				$level = $data[0]['value'];
				$trend = $data[1]['value'] - $data[0]['value'];

				$forecast = array();

				foreach ($data as $entry) {
						$value = $entry['value'];

						$new_level = $alpha * $value + (1 - $alpha) * ($level + $trend);
						$new_trend = $beta * ($new_level - $level) + (1 - $beta) * $trend;

						$forecast[] = array('year' => $entry['year'], 'value' => $level + $trend);
						$level = $new_level;
						$trend = $new_trend;
				}

				return $forecast;
		}
	
	
		public function product(){
			$model = new UserModel;
			$prod = new Template_Model;
			$data['user'] = $model->get_by_id(); 
			$data['getInfo'] = $prod->getInfo();  
			$this->load->view('admin/adminhead', $data);
			$this->load->view('admin/adminproduct', $data);
			$this->load->view('admin/adminfooter', $data);
		}

		public function data(){
		    $arrdata['legend'] = $this->Template_Model->legend();
			$arrdata['data'] = $this->AdminModel->data();

			$this->load->view('admin/adminhead');
			$this->load->view('admin/admindata',$arrdata );
			$this->load->view('admin/adminfooter');
		}
		public function client(){
			$arrdata['data'] = $this->AdminModel->client();

			/*
			echo '<pre>';  print_r($this->AdminModel->client());
			echo '<pre>';
			die('here');  */
			
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminclient', $arrdata);
			$this->load->view('admin/adminfooter');
		}

		public function clientfloat($id){

			$arrdata['data'] = $this->AdminModel->clientArr();
			
			$dataProduct['products'] = $this->AdminModel->getorder($id);
			/*
				echo '<pre>';  print_r($this->AdminModel->getorder($id));
				echo '<pre>';
				die('here');  
			*/ 
			$data['data'] = $this->AdminModel->clientget($id);
			
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminclient', $arrdata);
			$this->load->view('admin/clientfloat', $dataProduct, $data);
			$this->load->view('admin/adminfooter');
		}
	public function status($id) {
    if ($this->input->post('Status') !== null) {
        $data = [
            'Status' => $this->input->post('Status'),
            'fee' => $this->input->post('fee'),
        ];

        $this->db->where('order_id', $id); // Replace 'your_id_column_name' with the actual column name
        $this->db->update('ordered_tbl', $data);

        redirect(base_url('clientfloat/' . $id));
    } else {
        echo 'Error: value null';
    }
}
		public function seller(){
			$arrdata['data'] = $this->AdminModel->seller();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminseller', $arrdata);
			$this->load->view('admin/adminfooter');
		}
		public function adminUser(){
			$arrdata['data'] = $this->AdminModel->User();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminUser', $arrdata);
			$this->load->view('admin/adminfooter');
		}
		
		public function floatapproval($id){
			$arrdata['data'] = $this->AdminModel->approva();
			$data['data'] = $this->AdminModel->edit($id);
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminapproval', $arrdata);
			$this->load->view('admin/adminfloating',$data);
			$this->load->view('admin/adminfooter');
			
		}

		public function update_seller($id){
			$verify = 3;
			$data = [
				'user_type' => $verify,
			];
			$this->db->where('user_id', $id);
			$this->db->update('user', $data);
			redirect(base_url('adminapproval'));
			echo ' successfully been updated';
			
		}

		public function sellerfloat($id){
			$arrdata['data'] = $this->AdminModel->seller();
			$this->load->view('admin/adminhead');
			$this->load->view('admin/adminseller', $arrdata);
			$this->load->view('admin/sellerfloat');
			$this->load->view('admin/adminfooter');

		}

		public function delete($id) {
			$this->db->where('user_id', $id);
			$this->db->delete('user');
	
			echo 'successfully been deleted';
		}

		public function PrfDlvry($id)
		{
			//if run need to set code to save image and condition for file image type
			$ori_filename = $_FILES['Prof']['name'];
			$new_name = time()."".str_replace(' ', '-', $ori_filename);


			$config = [
				'upload_path' => './images/', //images directory
				'allowed_types' => 'png|jpg|gif',
				'file_name' => $new_name,
			];
			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('Prof')) {	

				echo 'error';
			}else{

				date_default_timezone_set('Asia/Manila');   
				$current_date = date('Y-m-d h:i A'); 
				$date = date('Y-m-d h:i A', strtotime($current_date));

				$p_filename = $this->upload->data('file_name');
					$Status = 'Delievered';

					$data = [   
					    'fee' => $this->input->post('fee'),
						'Status' => $Status,
						'PrfDlvry' 		=> $p_filename,
						'date_delievered' => $date
					];
				/*
				echo '<pre>';  print_r($data);
				echo '<pre>';
				die('here');   
				*/
				//$fkey['fkey'] = $this->session->auth_user('unique_id');
				$product = new AdminModel;
				$res = $product->insertPrf($data, $id);
				$this->session->set_flashdata('status', 'Product Inserted Successfully');
        		redirect(base_url('adminclient'));
      		
    		}
		}
	}	
?>