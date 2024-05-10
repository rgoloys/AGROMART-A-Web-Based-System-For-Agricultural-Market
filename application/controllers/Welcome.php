<?php

defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Welcome extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Product_Models');
		$this->load->model('UserModel');
		$this->load->model('Template_Model');
		$this->load->model('AdminModel');
		$this->load->model('Forecast_Model');

	}

	public function index(){

		$arrdata['croplist'] = $this->Template_Model->getAllData();//////////////////
		$arrdata['data'] = $this->Template_Model->dropdown();//////////////////////////////

		$datas['product'] = $this->Product_Models->get('product');
		$datas['TopProductIds'] = $this->Template_Model->TopProductIds(8);

		/*
		echo '<pre>';  print_r($this->Template_Model->TopProductIds(8));
		echo '<pre>';
		die('here'); 
		*/
		

		$this->load->view('welcome_message', $datas, $arrdata);
		$this->load->view('admin/adminfooter');/////////////////////////////////////////////////////////////
		//$this->load->view('seller/sdatafooter');
	}



	public function receiptload(){
		$this->load->view('receipt/receipt');
	}

	public function Product(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('products/Products', $data);
	}

	public function about(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('About', $data);
	}

	public function Contacts(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('Contacts', $data);
	}

	public function feauture1(){ //To load Data Mapping
	/*	$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('feature/dataMaping', $data);
		*/
		
		$arrdata['croplist'] = $this->Template_Model->getData();
		$arrdata['data'] = $this->Template_Model->dropdown();
		$legend['legend'] = $this->Template_Model->getLegend();
		//$arrdata['data'] = $this->AdminModel->data();
		
		$this->load->view('template/header', $legend);
		$this->load->view('feature/Maps_Head', $legend);
		$this->load->view('feature/dataMaping',$arrdata);
		$this->load->view('admin/adminfooter');
		$this->load->view('template/footer');
	}



	public function feauture2(){  
		//To load Forecasting
		$data['demand'] = [
			['months' => 1, 'value' => 1859],
			['months' => 2, 'value' => 1609],
			['months' => 3, 'value' => 1632],
			['months' => 4, 'value' => 2506],
			['months' => 5, 'value' => 2279],
			['months' => 6, 'value' => 2090],
			['months' => 7, 'value' => 2034],
			['months' => 8, 'value' => 1633],
			['months' => 9, 'value' => 1450],
			['months' => 10, 'value' => 2081],
			['months' => 11, 'value' => 2649],
			['months' => 12, 'value' => 2534],
			['months' => 13, 'value' => null]
	];
	$window_size = 3;
	$forecasted_data = [];

	for ($i = 0; $i < count($data['demand']); $i++) {
			$sum = 0;

			for ($j = max(0, $i - $window_size + 1); $j <= $i; $j++) {
					$sum += $data['demand'][$j]['value'];
			}
			$moving_average = $sum / min($window_size, $i + 1);

			$forecasted_data[] = [
					'months' => $data['demand'][$i]['months'],
					'value' => round($moving_average, 2)
			];
	}
	 // Assign the forecasted value of month 12 as the actual data of month 13
	$data['demand'][12]['value'] = $forecasted_data[11]['value'];


		$this->Template_Model->view('feature/forecasting', 
		['data' => $data, 'forecasted_data' => array_slice($forecasted_data, 0, 12)]);
	}
	
	
private function produce(){
	/* lgorithm for produce demand */
	        // Your dataset
					$data = array(
            array('year' => 2017, 'value' => 579013),
            array('year' => 2018, 'value' => 568862),
            array('year' => 2019, 'value' => 595463),
            array('year' => 2020, 'value' => 573337),
            array('year' => 2021, 'value' => 605131),
            array('year' => 2022, 'value' => 599577),
            array('year' => 2023, 'value' => null)
        );

        // Perform single exponential smoothing
        $alpha = 0.2; // Adjust the smoothing parameter as needed
        $forecast = $this->singleExponentialSmoothing($data, $alpha);
        //$lastForecast = end($forecast);
        $lastForecast = end($forecast);
        $data[count($data) - 1]['value'] = $lastForecast;

        $forecastData = $forecast; // Forecasted data (already calculated)*/
				 // Load a view to display the forecast
				 $this->load->view('feature/forecasting', 
            
				 array('data' => $data, 'forecast' => $forecast)
				
		 );

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



	public function fetch(){
		
		//print_r($product_data);*/
			$products = new Product_Model;
			$data['product'] = $products->getProducts();
			$this->load->view('feature/fetch',$data);
		
	}





	/*		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');

		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');
*/





public function joined($sort_column = 'title', $sort_order = 'asc', $time_period = 'all')
{
   // Load the necessary models and data

	 if ($time_period === 'monthly') {
		$datas['prodInfo'] = $this->Template_Model->get_sorted_data_monthly($sort_column, $sort_order);
} elseif ($time_period === 'weekly') {
		$datas['prodInfo'] = $this->Template_Model->get_sorted_data_weekly($sort_column, $sort_order);
} else {
		$datas['prodInfo'] = $this->Template_Model->get_sorted_data($sort_column, $sort_order);
}



				// Call the get_all_data function to retrieve all product data
				$sortedData = $this->Template_Model->get_sorted_data($sort_column, $sort_order);

		// Calculate remaining days or mark as "already harvested"
$currentDate = new DateTime();
$currentDate->setTime(0, 0); // Set the time part to 00:00:00

foreach ($sortedData as &$row) {
    $harvestDate = new DateTime($row['harvest']);
    $harvestDate->setTime(0, 0); // Set the time part to 00:00:00

    // Compare dates without time
    if ($currentDate > $harvestDate) {
        // The product has already been harvested
        $row['remaining_days'] = 'already harvested';
    } else {
        // Calculate remaining days
        $remainingDays = $currentDate->diff($harvestDate)->days;
        $row['remaining_days'] = $remainingDays . ' days';
    }
}

$datas['prodInfo'] = $sortedData;


$this->load->view('combined_forecast_view', [
	'time_period' => $time_period,
	'sort_column' => $sort_column,
	'sort_order' => $sort_order,
	'datas' => $datas, // Make sure to pass the $prodInfo variable
	// Add any other variables you need to pass to the view here
]);


}







/*AGRO-CASH*/
 	public function agrocash(){
		$id = $this->session->userdata('auth_user')['unique_id']; 
		$data['info'] = $this->UserModel->editInfo($id);
		$data['bal'] = $this->UserModel->getBlance_Transac();
		$data['balS'] = $this->UserModel->getBlance();
		$data['users'] = $this->UserModel->getUsr('users');

		$this->load->view('agrocash', $data);
 	}

	/*public function cashIn(){

			 $id = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
			
				$data = $this->input->post();
				
				if(isset( $_FILES) && isset($data)){

					//File - kukunin yung image then generate ng new image name
					$target_directory = "upload/Cash/";
					$file_name =  $_FILES['recipts']['name'];
					$file_tmpname =  $_FILES['recipts']['tmp_name'];
					$extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

					// Generate a new file name (random string + original extension).
					$file_new_name = substr(md5(microtime()), rand(0, 25), 8); // Creating a random string
					$file_upload_name = $file_new_name . "." . $extension;

					$notes = 'Pending';
					$sta = "You have successfully Cash In money";
					$name = $data['userName'];
					$cp_num = $data['user_number'];
					$amount = $data['Amount'];
					$payment = $data['Payment'];
					$status = $sta;
					$resibo = $file_upload_name;
					$unique_id = $id;
					$bal_id = $this->UserModel->getBal_id();
					$data = array(
						'unique_id' => $unique_id,
						'name' => $name,
						'cp_num' => $cp_num,
						'amount' => $amount,
						'payment' => $payment,
						'status' => $status,
						'resibo' => $resibo,
						'Notes'  => $notes,
						'bal_id' => $bal_id
					);

					if (move_uploaded_file($file_tmpname, $target_directory . $file_upload_name)) {
						//echo "File has been successfully uploaded.";
					} else {
						//echo "Sorry, there was an error uploading your file.";
					}
					move_uploaded_file($file_tmpname, "./upload/".$file_upload_name);//Putting image in file name upload
					
						$user = new UserModel;
			
						$res = $user->cashIn($data);
						
					/*	$bal = $this->UserModel->get($id);
						$New_bal = $this->input->get('amount');
						$test = $New_bal - $bal;
						$data = array(
							'amount' => $test
						);
						$res = $user->UpdateBal($New_bal, $bal, $id);
						*
						$this->session->set_flashdata('status', 'Cash In Successfully!');
						redirect(base_url('agrocash'));
			}
		}*/
		public function cashIn(){
				//if run need to set code to save image and condition for file image type
				$ori_filename = $_FILES['recipts']['name'];
				$new_name = time()."".str_replace(' ', '-', $ori_filename);

				$config = [
					'upload_path' => './upload/Cash/', //images directory
					'allowed_types' => 'png|jpg|gif',
					'file_name' => $new_name,
				];
				$this->load->library('upload', $config);
	
				if (! $this->upload->do_upload('recipts')) {	
	
					echo 'error';
				}else{
					date_default_timezone_set('Asia/Manila');   
					$current_date = date('Y-m-d h:i A'); 
					$date = date('Y-m-d h:i A', strtotime($current_date));
	
					$p_filename = $this->upload->data('file_name');
					$notes = 'You have successfully Cash In money';
					$status = 'Pending';
					$id = $this->session->userdata('auth_user')['unique_id'];
					$data = [  
						'Status' => $status,
						'name' => $this->input->post('userName'),
						'cp_num' => $this->input->post('user_number'),
						'amount'	=> $this->input->post('Amount'),
						'payment'	=> $this->input->post('Payment'),
						'Notes'		=>$notes,
						'resibo'	=>$p_filename,
						'bal_id' 	=>$this->UserModel->getBal_id($id),
						'unique_id'=>$id,
					];
					$user = new UserModel;
			
						$res = $user->cashIn($data);

					$this->session->set_flashdata('status', 'Product Inserted Successfully');
					redirect(base_url('agrocash'));
				}
		}

	public function activate(){
		$unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
		$bal_id = substr(md5(microtime()), rand(0,25), 6);
		$bal = "100";
		$data = [
			'bal_id' => $bal_id,
			'unique_id' =>$unik, 
			'balance' 	=> $bal
		];
		$activate = new UserModel;
		$res = $activate->activate($data);

		$activated = "activated";
		$datas = [
			'Agrocash' 	=> $activated
		];

		$act = new UserModel;
		$res = $act->activated($datas, $unik);
		redirect(base_url('agrocash')); 
	}



	public function Approved($id){
		
		$data = [
			'balance' => $this->input->post('newBalance')
		];

		$newBal = new UserModel;
		$res = $newBal->newBal($data, $id);
		
		$A_id = $this->input->get('amount');
		$d = "done";
		$dt = [
			'status' => $d
		];
		$this->db->where('amount', $A_id);
		$this->db->update('agrocash', $dt);
		
		redirect(base_url('adminpage'));
		echo ' successfully been updated';
		
	}

}
?>

