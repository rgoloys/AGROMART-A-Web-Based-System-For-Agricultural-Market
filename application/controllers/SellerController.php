<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SellerController extends CI_Controller{

        public function __construct(){
			parent:: __construct();
			$this->load->model('Template_Model');
			$this->load->model('AdminModel');
            $this->load->library('form_validation');
		    $this->load->helper('form');
		    $this->load->model('Product_Model');
            $this->load->model('UserModel');
		}

        public function seller(){
            $this->load->view('auth/seller');  //DITO NAGAWA NG SELLER ACCOUNT
        }
       public function scharge(){
                 $data['scharge'] = $this->AdminModel->scharge();
    
    // Assuming you want to send the result to the view
    echo json_encode($data);

        }
        public function sellerimage(){
            $data = $this->input->post();


            $img = $_POST['image'];
            $folderPath = "upload/selfie/";
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.png';
            $filee = $folderPath . $fileName;
            file_put_contents($filee, $image_base64);
        
            if (isset($_FILES['valid_id']) && $_FILES['valid_id']['error'] == UPLOAD_ERR_OK){
                // Where the file is going to be stored
                $target_dir = "upload/id/";
                $file = $_FILES['valid_id']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['valid_id']['tmp_name'];
                $path_filename_ext = $target_dir . $filename . "." . $ext;
            
                // Create the target directory if it doesn't exist
                if (!file_exists($target_dir)){
                    mkdir($target_dir, 0777, true);
                }
            
                // Move the uploaded file to the target directory
                if (move_uploaded_file($temp_name, $path_filename_ext)){
                   // echo "File uploaded successfully!";
                }else{
                  //  echo "Failed to move the file.";
                }
             }else{
                echo "Error uploading the file.";
            }
            
            if (isset($_FILES['gcash']) && $_FILES['gcash']['error'] == UPLOAD_ERR_OK){
                // Where the file is going to be stored
                $target_dir = "upload/gcash/";
                $file = $_FILES['gcash']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['gcash']['tmp_name'];
                $path_filename_ext2 = $target_dir . $filename . "." . $ext;
            
                // Create the target directory if it doesn't exist
                if (!file_exists($target_dir)){
                    mkdir($target_dir, 0777, true);
                }
            
                // Check if file already exists (optional)
                if (!file_exists($path_filename_ext2)){
                    // Move the uploaded file to the target directory
                    if (move_uploaded_file($temp_name, $path_filename_ext2)){

                        //echo "File uploaded successfully!";
                    }else{
                        echo "Failed to move the file.";
                    }
                }else{
                    //echo "File already exists.";
                }
             }else{
                echo "Error uploading the file.";
             }
            
             if (isset($_FILES['sphoto']) && $_FILES['sphoto']['error'] == UPLOAD_ERR_OK){
                 // Where the file is going to be stored
                 $target_dir = "upload/shop/";
                 $file = $_FILES['sphoto']['name'];
                 $path = pathinfo($file);
                 $filename = $path['filename'];
                 $ext = $path['extension'];
                 $temp_name = $_FILES['sphoto']['tmp_name'];
                 $path_filename_ext3 = $target_dir . $filename . "." . $ext;
             
                 // Create the target directory if it doesn't exist
                 if (!file_exists($target_dir)){
                     mkdir($target_dir, 0777, true);
                 }
             
                 // Check if file already exists (optional)
                 if (!file_exists($path_filename_ext3)){
                     // Move the uploaded file to the target directory
                     if (move_uploaded_file($temp_name, $path_filename_ext3)){
 
                        // echo "File uploaded successfully!";
                     }else{
                         echo "Failed to move the file.";
                     }
                 }else{
                     //echo "File already exists.";
                 }
              }else{
                 echo "Error uploading the file.";
              }
           

            if( isset($data)){
                $fname = $data['fname'];
                $lname = $data['lname'];
                $email = $data['email'];
                $password = $data['password'];
                $Provice = $data['txt_Provice'];
                $Municipality = $data['txt_Municipality'];
                $Barangay = $data['txt_Barangay'];
                $Street = $data['txt_Street'];
                $OtherAddress = $data['OtherAddress'];
                $lat = $data['lat'];
                $lng = $data['lng'];
                $sname = $data['sname'];
                $sdes = $data['sdes'];
                $number = $data['number'];

                $sphoto = $path_filename_ext3;
                $valid_id = $path_filename_ext;
                $gcash = $path_filename_ext2;
                $selfie = $filee;
                $user_type = 0;
                $unique_id = substr(md5(microtime()), rand(0,25), 6);
                $user_id = substr(md5(microtime()), rand(0,25), 6);
                $user_status = 'active';
                $cpassword = $data['cpass'];

                if($cpassword == $password){

                    $data = array(
                        'fname' => $fname,
                        'lname' => $lname,
                        'email' => $email,
                        'password' => $password,
                        'Provice' => $Provice,
                        'Municipality' => $Municipality,
                        'Barangay' => $Barangay,
                        'Street' => $Street,
                        'OtherAddress' => $OtherAddress,
                        'lat' => $lat,
                        'lng' => $lng,
                        'sname' => $sname,
                        'sdes' => $sdes,
                        'number' => $number,

                        'user_avtar' => $selfie,
                        'user_status' => $user_status,
                        'sphoto' =>$sphoto,
                        'valid_id' => $valid_id,
                        'gcash' => $gcash,
                        'user_type' => $user_type,
                        'unique_id' => $unique_id,
                        'user_id' => $user_id,
                    );


                    $email = $this->UserModel->checkEmail($email);
                    if(isset($email[0]['email'])){
                                
                        $this->session->set_flashdata('Email_Alert', 'Ooops! Emails is already in used.');
                        $this->load->view('auth/seller');
                    }else{

                      //  $this->UserModel->registerUser($data);
                      //  $this->UserModel->idUpdate();

                        //move_uploaded_file($file_tmpname, "./upload/".$file_upload_name);//Putting image in file name upload

                        $username = $fname." ".$lname;
                        $image = $selfie;
                        $session_arr = array(
                            'username' => $username,
                            'image' => $image,
                            'uniqueid' => $unique_id
                        );
                        $response=$this->Template_Model->saveseller($data);

                        if($response==true){
                            $this->session->set_userdata($session_arr);		
                            redirect(base_url('login'));
                        }else{
                            echo "Insert error !";
                        }
                                    
                        
                        }	
                }else{
                    $this->session->set_flashdata('Email_Alert', 'Ooops! Password does not match');
                    redirect(base_url('Seller'));
                }



           
		    }
        }//end of sellerimage controller

        public function sellerdash($sort_column = 'title', $sort_order = 'asc', $time_period = 'all'){
            // PALAY
            $datas['legend'] = $this->Template_Model->legend();
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
                array('year' => 2010, 'value' => 112.64),
                array('year' => 2011, 'value' => 106.51	),
                array('year' => 2012, 'value' => 109.48),
                array('year' => 2013, 'value' => 107.34),
                array('year' => 2014, 'value' => 109.72),
                array('year' => 2015, 'value' => 108.12),
                array('year' => 2016, 'value' => 107.81),
                array('year' => 2017, 'value' => 119.55),
                array('year' => 2018, 'value' => 149.00),
                array('year' => 2019, 'value' => 153.25),
                array('year' => 2020, 'value' => 165.41),
                array('year' => 2021, 'value' => 185.34),
                array('year' => 2022, 'value' => 192.03),
                array('year' => 2023, 'value' => null)
            );
            
            // Perform single exponential smoothing
 
                  $alphaR = 0.09; // Adjust the smoothing parameter as needed
                  $forecastrice = $this->singleExponentialSmoothing($dataProduce, $alphaR);
                  $lastForecastrice = end($forecastrice);
                  $dataProduce[count($dataProduce) ]['value'] = $lastForecastrice;
                  //$lastForecast = end($forecast);
      
                  $alphaC = 0.37; // Adjust the smoothing parameter as needed
                  $forecast = $this->singleExponentialSmoothing($dataCORN, $alphaC);
                  $lastForecast = end($forecast);
                  $dataCORN[count($dataCORN) ]['value'] = $lastForecast;
      
                  $alphaM = 0.24; 
                  $forecastMango = $this->singleExponentialSmoothing($Mango, $alphaM);
                  $lastMango = end($forecastMango);
                  $Mango[count($Mango) ]['value'] = $lastMango;
      
                  $alphaG = 0.46; 
                  $forecastbanana = $this->singleExponentialSmoothing($dataBanana, $alphaG);
                  $lastbanana = end($forecastbanana);
                  $dataBanana[count($dataBanana) ]['value'] = $lastbanana;

            // $forecastData = $forecast; // Forecasted data (already calculated)
            $unik = $this->session->userdata('auth_user')['unique_id']; 
            //CARD 
            $datas['countShip'] = $this->Template_Model->countShip();
            $datas['countCancel'] = $this->Template_Model->countCancel();
            $datas['countReturn'] = $this->Template_Model->countReturn();
            $datas['countDelievered'] = $this->Template_Model->countDelievered();
            $datas['countPending'] = $this->Template_Model->countPending();
        
            $start_date = $this->input->get('start_date');
            $end_date = $this->input->get('end_date');

            $Lstart_date = $this->input->get('start_date');
            $Lend_date = $this->input->get('end_date');


            // SALES / REVENUE CARD
            $datas['Tprice'] = $this->Template_Model->Sales($unik);
            $Sales = $this->Template_Model->Sales($unik);
            $LastSales = $this->Template_Model->LastSales($unik);

            if($Sales != 0 ){
                if($Sales > $LastSales){
                    $abs = $Sales;
                }else{
                    $abs = $LastSales;
                }
                $percentageDifference = ($Sales - $LastSales) / abs($abs) * 100;
                $dif = number_format($percentageDifference, 2) . "%";
            }else{
                $dif = 0;
            }
           

                // PROFIT CARD
            $datas['profit'] = $this->Template_Model->profit($unik);
            $profit = $this->Template_Model->profit($unik);
            $Lastprofit = $this->Template_Model->Lastprofit($unik);

            if($profit != 0){
                if($profit > $Lastprofit){
                    $Difference = $profit;
                }else{
                    $Difference = $Lastprofit;
                }
                $percentageDifference = ($profit - $Lastprofit) / abs($Difference) * 100;
                $difP = number_format($percentageDifference, 2) . "%";
            }else{
                $difP = 0;
            }


            // COST CART
            $datas['cost'] = $this->Template_Model->cost($unik);
            $cost = $this->Template_Model->cost($unik);
            $Lastcost = $this->Template_Model->Lastcost($unik);

            if($cost != 0){
                if($cost > $Lastcost){
                    $Difference = $cost;
                }else{
                    $Difference = $Lastcost;
                }
                $percentageDifference = ($cost - $Lastcost) / abs($Difference) * 100;
                $difc = number_format($percentageDifference, 2) . "%";
            }else{
                $difc = 0;
            }


            //sa doughnut ito
            $datas['top'] = $this->Template_Model->getTopOrderedProducts($unik);

            //sa filteration ng sales report
            $column = $this->input->get('column'); // Get the selected limit from the dropdown
            $order = $this->input->get('order'); // Get the selected limit from the dropdown

                        
            $salesFrom = $this->input->get('salesFrom');
            $salesTo = $this->input->get('salesTo');

            $limit = $this->input->get('limit');
            $limit1 = $this->input->get('limit1');

            $datas['report'] = $this->Template_Model->report($unik,  $column, $order, $limit, $limit1, $salesFrom, $salesTo);

            //TOTAL sales report tables
            $datas['sum_of_sales'] = $this->Template_Model->hasCharge($unik,$limit, $limit1, $salesFrom, $salesTo);

            $sales_this_month = $this->Template_Model->sales_this_month($unik);
            $sales_last_month = $this->Template_Model-> sales_last_month($unik);
            $sales_last2_month = $this->Template_Model-> sales_last2_month($unik);
            $sales_last3_month = $this->Template_Model-> sales_last3_month($unik);
            $sales_last4_month = $this->Template_Model-> sales_last4_month($unik);
            $sales_last5_month = $this->Template_Model-> sales_last5_month($unik);
           // $sales_this_day = $this->Template_Model->sales_this_day()
  
            /*
            echo '<pre>';  print_r($sales_last_month);
			echo '<pre>';
			die('here'); 
            */

            $datas['ProdMap'] = $this->Template_Model->getData();
            $datas['prodInfo'] = $this->Template_Model->productInfo();
            

            // Call the get_all_data function to retrieve all product data
            $sortedData = $this->Product_Models->get_sorted_data($sort_column, $sort_order);

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
                    $row['remaining_days'] = $remainingDays . ' days remaining';
                }
            }
        
        $datas['prodInfo'] = $sortedData;
            
            //$this->load->view('seller/sellerhead');
			$this->load->view('seller/sellerdash', [
                'dif' => $dif,
                'difP' => $difP,
                'difc' => $difc,
                'dataProduce' => $dataProduce,
                'dataCORN' => $dataCORN,
                'dataBanana' => $dataBanana,
                'Mango'=> $Mango,

                'forecast' => $forecast,
                'forecastrice' => $forecastrice,
                'forecastbanana'=> $forecastbanana,
                'forecastMango' => $forecastMango,

                'time_period' => $time_period,
                'sort_column' => $sort_column,
                'sort_order' => $sort_order,
                'datas' => $datas,
                //'data' => $data,
                //'forecasted_data' => array_slice($forecasted_data, 0, 12),  // Exclude month 13

                'sales_this_month' => $sales_this_month,
                'sales_last_month'=>$sales_last_month,
                'sales_last2_month' => $sales_last2_month,
                'sales_last3_month' => $sales_last3_month,
                'sales_last4_month' => $sales_last4_month,
                'sales_last5_month' => $sales_last5_month,

                'lastForecastRice' => $lastForecastrice,
                'lastForecastCorn' => $lastForecast,
                'lastForecastMango' => $lastMango,
                'lastForecastBanana' => $lastbanana,
              
                //to load defautl value in filters
                'column' => $column,
                'order' =>$order,
                'limit' =>$limit,
                'limit1' =>$limit1,
                'salesFrom' =>$salesFrom,
                'salesTo' => $salesTo,

                'start_date' =>$start_date,
                'end_date' => $end_date,
                'Lend_date' => $Lend_date,
                'Lstart_date' => $Lstart_date,

               ]);

               $this->load->view('seller/sdatafooter');
            
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

        public function myAccounts(){
            $unik =$this->session->userdata('auth_user')['unique_id'];
            $data['info'] = $this->UserModel->editInfo($unik);
             
            /*
            echo '<pre>';  print_r($this->UserModel->editInfo($unik));
			echo '<pre>';
			die('here'); 
            */
            $this->load->view('seller/sellerhead');
            $this->load->view('seller/myAccount', $data);
            $this->load->view('seller/sellerfooter');
        }
        
		public function sellerAddress($id){
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
			redirect(base_url('myAccounts'));
		}
        
		public function update_seller($id){
			
			$old_filename = $this->input->post('old_user_avtar');
			$new_filename = $_FILES["user_avtar"]["name"]; 
			if($new_filename == TRUE){

				$update_filename = time()."".str_replace(' ', '-', $_FILES['user_avtar']['name']);
				$config = [
				'upload_path' => '/upload/user/',
				'allowed_types' => 'png|jpg|gif|jpeg',
				'file_name' => $update_filename,
				];

				$this->load->library('upload', $config);
				if($this->upload->do_upload('user_avtar')){
					if(file_exists("/upload/user/".$old_filename)){

						unlink("/upload/user/".$old_filename);
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
				redirect(base_url('myAccounts'));
		}


          public function order(){
            $products = new Product_Model;

           // $data['product'] = $products->getProducts();
            $data['order'] = $products->getOrderS();
            $data['buyer'] = $products->buyerDetails();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/sellerorders',  $data);
			$this->load->view('seller/sellerfooter');
        }
        public function com(){
            $products = new Product_Model;

           // $data['product'] = $products->getProducts();
            $data['order'] = $products->getOrderC();
            $data['buyer'] = $products->buyerDetails();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/com',  $data);
			$this->load->view('seller/sellerfooter');
        }
        public function shipping(){
            $products = new Product_Model;

           // $data['product'] = $products->getProducts();
            $data['order'] = $products->getOrderS();
            $data['buyer'] = $products->buyerDetails();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/shipping',  $data);
			$this->load->view('seller/sellerfooter');
        }
        public function cancelled(){
            $products = new Product_Model;
           
           // $data['product'] = $products->getProducts();
            $data['order'] = $products->getOrderD();
            $data['buyer'] = $products->buyerDetails();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/cancelled',  $data);
			$this->load->view('seller/sellerfooter');
        }
        public function preparing(){
            $products = new Product_Model;
            $unik = $this->session->userdata('auth_user')['unique_id'];
            $data['data'] = $this->Template_Model->userss($unik);
            
           // $data['product'] = $products->getProducts();
            $data['order'] = $products->getOrderP();
            
            $data['buyer'] = $products->buyerDetails();
           
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/preparing',  $data);
			$this->load->view('seller/sellerfooter');
        }
        public function sellerproduct(){
            $products = new Product_Model;
		    $data['product'] = $products->getProducts();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/sellerproduct' , $data);
			$this->load->view('seller/sellerfooter');
        }

        public function sellermap(){
            //$arrdata['data'] = $this->Template_Model->dropdown();
             $arrdata['data'] = $this->Template_Model->getData();
            $this->load->view('seller/sellerhead');
            
			$this->load->view('seller/sellerdata' , $arrdata);
            $this->Template_Model->markk();
			$this->load->view('seller/sellerfooter');

        }
        public function sellerdataUser(){
            
            $r = $this->session->userdata('auth_user')['unique_id'];

          /* Check submit button */	
       
            if($this->input->post('save')){
                $data['unique_id']= $r;
                $data['crops']=$this->input->post('crops');
                $data['types']=$this->input->post('types');
                $data['plant_date']=$this->input->post('plant_date');
                $data['harvest_date']=$this->input->post('harvest_date');

                $data['lat']=$this->input->post('lat');
                $data['lng']=$this->input->post('lng');

                $response=$this->Template_Model->saverecords($data);

                if($response==true){
                    redirect(base_url('dataMaping'));
                    echo "Records Saved Successfully";
                }else{
                        echo "Insert error !";
                }
            }
        }
        public function sellerdata(){
            
            $r = $this->session->userdata('auth_user')['unique_id'];
            
            //$arrdata['data'] = $this->Template_Model->dropdown();
            $arrdata['data'] = $this->Template_Model->getData();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/sellerdata' , $arrdata);
            $this->Template_Model->markk();
			$this->load->view('seller/sellerfooter');

            /* Check submit button */

            if($this->input->post('save')){
                $data['unique_id']= $r;
                $data['crops']=$this->input->post('crops');
                $data['types']=$this->input->post('types');
                $data['plant_date']=$this->input->post('plant_date');
                $data['harvest_date']=$this->input->post('harvest_date');

                $data['lat']=$this->input->post('lat');
                $data['lng']=$this->input->post('lng');

                $response=$this->Template_Model->saverecords($data);

                if($response==true){
                    echo "Records Saved Successfully";
                }else{
                        echo "Insert error !";
                }
            }
        }
        public function sellerdatalist(){
           $arrdata['data'] = $this->Template_Model->dropdown();
            $this->load->view('seller/sellerhead');
			$this->load->view('seller/sellerdatalist' , $arrdata);
            
			$this->load->view('seller/sellerfooter');
          
        }
        public function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('map');
             redirect(base_url('sellerdata'));
			echo 'successfully been deleted';			
		}
        public function userMapDeletion($id){
			$this->db->where('id', $id);
			$this->db->delete('map');
             redirect(base_url('dataMaping'));
			echo 'successfully been deleted';
        }

        public function sellerforecast(){

            $this->load->model('Forecast_Model');

            $data1 = $this->Forecast_Model->SanClemente();
            $forecast1 = $this->double_exponential_smoothing($data1);

            $data2 = $this->Forecast_Model->Camiling();
            $forecast2 = $this->double_exponential_smoothing($data2);

            $data3 = $this->Forecast_Model->Joined();
            $forecast3 = $this->double_exponential_smoothing($data3);



            $this->load->view('seller/sellerhead');
            $this->load->view('seller/sellerforecast', array(
                'data1' => $data1,
                'forecast1' => $forecast1,
                'data2' => $data2,
                'forecast2' => $forecast2,
                'data3' => $data3,
                'forecast3' => $forecast3
            ));
            $this->load->view('seller/sellerfooter');
        
            //$this->load->view('CropView', array('data' => $data1, 'forecast' => $forecast));
        }
 
    public function model($id){
        $data['product'] = $this->Template_Model->reciept($id);
        // print_r($data);
        //die();
        $products = new Product_Model;
        $unik = $this->session->userdata('auth_user')['unique_id'];
        $data['data'] = $this->Template_Model->userss($unik);
        
        
        // $data['product'] = $products->getProducts();
        $data['order'] = $products->getOrderS();
        $data['buyer'] = $products->buyerDetails();
        
        $this->load->view('seller/sellerhead');
        $this->load->view('seller/preparing',  $data);
        $this->load->view('seller/model',  $data);
        $this->load->view('seller/sellerfooter');
    }
    
    public function change1($id){
        $verify = "To-Ship";
        $data = [
            'Status' => $verify,
            'shipArr'     => $this->input->post('Shipment'),  
            'dateShip'    =>$this->input->post('dateShip'),  
        ];

        $this->db->where('order_id', $id);
        $this->db->update('ordered_tbl', $data);
    
        // Display success message
        echo 'Order successfully updated';
    
        // Redirect after displaying the message
        redirect(base_url('sellerorder'));
    }

    public function change2($id){
        $verify = 2;
        $data = [
            'Status' => $verify,
        ];
        $this->db->where('order_id', $id);
        $this->db->update('ordered_tbl', $data);
    
        // Display success message
        echo 'Order successfully updated';
    
        // Redirect after displaying the message
        redirect(base_url('shipping'));
    }
    
    public function change3($id){
        $verify = 3;
        $data = [
            'Status' => $verify,
        ];
        $this->db->where('order_id', $id);
        $this->db->update('ordered_tbl', $data);
    
        // Display success message
        echo 'Order successfully updated';
    
        // Redirect after displaying the message
        redirect(base_url('preparing'));
    }
    

    public function shipment($id){    
        if($this->input->post('selectedOption') != null && $this->input->post('dateShip') != null ){
            $verify = 'To-Ship';
            
            $data = [
                'Status' => $verify,
                'shipArr'     => $this->input->post('selectedOption'),  
                'dateShip'    =>$this->input->post('dateShip'),  
              ];
              $product = new Template_Model;
    

              $product->insertShip($data, $id);
              redirect(base_url('preparing'));
        }else{
            $this->session->set_flashdata('status', 'Error! check date value..');
            redirect(base_url('preparing'));
        }
    }
    }
?>