<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class PageController extends CI_Controller{

		public function __construct(){

			parent:: __construct();
			$this->load->model('Product_Models');
			$this->load->model('UserModel');
      $this->load->model('Forecast_Model');
      $this->load->model('Template_Model');
      $this->load->model('AdminModel');

		}
    /*
    public function mysellermark(){
      $mapType = $this->input->post('mapType');
   
      $data = $this->Template_Model->mysellermark();
    
    }*/
    
    public function perform_search($page = 1) {
      $keyword = $this->input->post('keyword'); // Get the search keyword from the form
  
      $this->load->library('pagination');
  
      // Pagination configuration
      $config['base_url'] = site_url('search/perform_search');
      $config['total_rows'] = $this->Product_Models->count_search_results($keyword);
      $config['per_page'] = 21; // Number of results per page
  
      // Initialize pagination
      $this->pagination->initialize($config);
  
      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data['results'] = $this->Product_Models->search_data($keyword, $config['per_page'], $page);
  
      $data['pagination_links'] = $this->pagination->create_links();
        $data['key'] = $keyword;
      
      $data['TopProductIds'] = $this->Template_Model->TopProductIds(8);
      $this->load->view('search', $data);
  }
  
  

		public function userpage($sort_column = 'title', $sort_order = 'asc', $time_period = 'all'){
      
            /*ANNUALLY */
                    // PALAY
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
      
                  $dataBanana = array( //Ginger
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


      $arrdata['croplist'] = $this->Template_Model->getData();
      $arrdata['data'] = $this->Template_Model->dropdown();
      $legend['legend'] = $this->Template_Model->getLegend();
      //$arrdata['data'] = $this->AdminModel->data();
      
    

      $datas['product'] = $this->Product_Models->get('product');
      $datas['TopProductIds'] = $this->Template_Model->TopProductIds(8);
      $id = $this->session->userdata('auth_user')['unique_id']; 

      
      $datas['info'] = $this->UserModel->editInfo($id);
      $datas['bal'] = $this->UserModel->getBlance_Transac();
			$datas['users'] = $this->UserModel->getUsr('users');

      

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
                    $row['remaining_days'] = $remainingDays . ' days remaining';
                }
            }
        
        $datas['prodInfo'] = $sortedData;
    
            $this->load->view('template/userhead', 
            [
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

              'lastForecastRice' => $lastForecastrice,
              'lastForecastCorn' => $lastForecast,
              'lastForecastMango' => $lastMango,
              'lastForecastBanana' => $lastbanana,
          ]);

          

			
			$this->load->view('userpage',$datas, $legend, $arrdata);
      $this->load->view('template/userfooter');
      
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

  public function sellerpage(){
      
      
    //	$arrdata['data'] = $this->Template_Model->dropdown();
    //	$this->load->view('template/header');
    $this->load->view('seller/sellerhead');
    $this->load->view('seller/sellerdash');
    $this->load->view('seller/sellerfooter');

    //$this->load->view('userpage', $arrdata);
    //			$this->load->view('template/footer');



    if($this->input->post('save'))
    {
      $data['crops']=$this->input->post('crops');
      $data['types']=$this->input->post('types');
      $data['plant_date']=$this->input->post('plant_date');
      $data['harvest_date']=$this->input->post('harvest_date');

      $data['lat']=$this->input->post('lat');
      $data['lng']=$this->input->post('lng');
      $response=$this->Template_Model->saverecords($data);
      if($response==true){
        echo "Records Saved Successfully";
      }
      else
      {
        echo "Insert error !";
      }
    }
  }

    public function mark(){
      $arrdata['croplist'] = $this->Template_Model->getData();
      $arrdata['data'] = $this->Template_Model->dropdown();
      $arrdata['legend'] = $this->Template_Model->getLegend(); 
      $arrdata['data'] = $this->Template_Model->mark();
      $arrdata['data'] = $this->Template_Model->sellermark();

      $this->load->view('userpage', $arrdata);

    }
    public function markss(){
      $arrdata['data'] = $this->Template_Model->mark();

      $this->load->view('userpage', $arrdata);

    }




    public function sellermark($e, $a, $min, $max, $hmin, $hmax, $add)
    {
      $mapType = $this->input->post('mapType');

      $data = $this->Template_Model->sellermark($e, $a, $min, $max, $hmin, $hmax, $add );

    }
    public function userloc()
    {
      $unik = $this->session->userdata('auth_user')['unique_id']; 

      $data = $this->Template_Model->userloc($unik);

    }
    public function allsellermark()
    {
      $mapType = $this->input->post('mapType');

      $data = $this->Template_Model->allsellermark();

    }



    public function accessdenied(){
      $data =[];
      $this->Template_Model->view('errors/403', $data);
    }


  }
?>