<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ProductController extends CI_Controller{

    public function __construct()
    {//as always autoloads
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model('Product_Model');
      $this->load->model('Template_Model');
      $this->load->model('UserModel');
      $this->load->model('Feedback_Model');
    $this->load->model('AdminModel');
    }

    public function productDetails($id){
      /*
      echo '<pre>';  print_r( $this->Product_Model->percint($id));
			echo '<pre>';
			die('here');   
      */
      // $productData['dlvryAddrss'] = $this->Product_Model->dlvryAddrss();

      $productData['date'] = $this->Product_Model->getDate();
      $productData['Status'] = $this->Product_Model->getStatus($id);
      $productData['getDatePlant'] = $this->Product_Model->getDatePlant();
      $productData['getDateHarvest'] = $this->Product_Model->getDateHarvest();

      $productData['prod'] = $this->Product_Model->getDetails($id); //Para sa image

      $productData['rate'] = $this->Product_Model->getRate($id);
      $productData['checkRate'] = $this->Product_Model->checkRate($id);

      /*
      echo '<pre>';  print_r($this->Product_Model->getDetails($id));
			echo '<pre>';
			die('here');
      */

      
      $productData['avgRate'] = $this->Product_Model->avgRate($id);
     // $avgRate = $this->Product_Model->avgRate($id);

      $productData['countRate'] = $this->Product_Model->countRate($id);

      $productData['countSold'] = $this->Product_Model->countSold($id);

		  //$productData['product'] = $this->Product_Model->getDetails($id);
      $productData['product'] = $this->Product_Model->productDetails($id);
			/*echo '<pre>';  print_r($productData);
			echo '<pre>';
			die('here');  */
      //$this->load->view('products/productDetails' , $productData);
		 $this->Template_Model->view('products/productDetails' , $productData);
	  }


    public function checkout($id){

      $productData['checkoutValue'] = $this->Product_Model->checkoutValue($id);
      $productData['dlvryAddrss'] = $this->Product_Model->dlvryAddrss();
      $productData['product'] = $this->Product_Model->getDetails($id); //Para sa image
      $productData['products'] = $this->Product_Model->productDetails($id);// fetch kung isnu ung seller
      $productData['buyer'] = $this->Product_Model->buyerDetails($id);// fetch kung isnu ung bu,ili

      $productData['bal'] = $this->UserModel->getBlance_Transac();
      $this->load->view('products/checkout', $productData);
    }
    public function checkoutCart($id){
     /*
      echo '<pre>';  print_r($this->Product_Model->getProductID($id));
			echo '<pre>';
			die('here');
    */
    

      $productData['checkoutValue'] = $this->Product_Model->checkoutValue($id);
     
      $productData['dlvryAddrss'] = $this->Product_Model->dlvryAddrss();
      $productData['product'] = $this->Product_Model->getDetails($id); //Para sa image
      $productData['products'] = $this->Product_Model->productDetails($id);// fetch kung isnu ung seller

      $productData['buyer'] = $this->Product_Model->buyerDetails($id);// fetch kung isnu ung bu,ili
      $this->load->view('products/checkoutCart', $productData);
    }
    public function orderedCart($id){

      if(	$this->input->post('Quantity') != null ){
        //if run need to set code to save image and condition for file image type
        $ori_filename = $_FILES['Reciept']['name'];
        $new_name = time()."".str_replace(' ', '-', $ori_filename);
        $config = [
          'upload_path' => './images/', //images directory
          'allowed_types' => 'png|jpg|gif',
          'max_size' => 3072,
          'file_name' => $new_name,
        ];

        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('Reciept')){          
          if($this->input->post('PaymentMethod') == 'gcash'){
            $this->session->set_flashdata('payment','Please Upload Reciept for Proof of Payment !');
            redirect(base_url('checkout/'. $id));
          }else{
            $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
 
            $data = [
              'seller_unique_id	' => $this->Product_Model->getSeller($id),
              'unique_id'         =>$unik, 
              'OrUnitPrice'       => $this->Product_Model->getPrice($id), 
              'PaymentMethod'     => $this->input->post('PaymentMethod'),    
              'Quantity' 	        => $this->input->post('Quantity'),  
              'UnitQuan'          => $this->Product_Model->getQuantity($id),
              'Total_Price' 	    => $this->input->post('Total_Price'), 
              'charge'            => $this->Product_Model->Ship($id),
              'Reciept' 	        => 'CashOnDelievery',
              'p_id' 			        => $this->input->post('p_id'), 
            ];
            $product = new Product_Model;
            $res = $product->insertOrder($data);

            $datanewStocks = [
              'p_stocks' => $this->input->post('newStocks')
            ];
            $res = $product->updateStocks($datanewStocks, $id);
            redirect(base_url('myCart/'. $id));
          }

        }else{
          //$sellerData['product'] = $this->Product_Model->getSellerId($id);

          
          $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
          $p_filename = $this->upload->data('file_name');
          $data = [
            'seller_unique_id	' => $this->Product_Model->getSeller($id),
            'unique_id'         =>$unik, 
            'PaymentMethod'     => $this->input->post('PaymentMethod'),    
            'Quantity' 	        => $this->input->post('Quantity'),  
            'Total_Price' 	    => $this->input->post('Total_Price'), 
            'charge'            => $this->Product_Model->Ship($id),
            'Reciept' 	        => $p_filename,
            'UnitQuan'          => $this->Product_Model->getQuantity($id),
            'OrUnitPrice'       => $this->Product_Model->getPrice($id), 
            'p_id' 			        =>  $this->input->post('p_id'), 
          ];
          $product = new Product_Model;
          $res = $product->insertOrder($data);

          redirect(base_url('myCart/'. $id));
        }
      }else{
        echo 'error!!!';
      }

    }
     
    public function ordered($id){

      if(	$this->input->post('Quantity') != null ){
        //if run need to set code to save image and condition for file image type
        $ori_filename = $_FILES['Reciept']['name'];
        $new_name = time()."".str_replace(' ', '-', $ori_filename);
        $config = [
          'upload_path' => './images/', //images directory
          'allowed_types' => 'png|jpg|gif',
          'max_size' => 3072,
          'file_name' => $new_name,
        ];

        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('Reciept')){          
          if($this->input->post('PaymentMethod') == 'gcash'){
            $this->session->set_flashdata('payment','Please Upload Reciept for Proof of Payment !');
            redirect(base_url('checkout/'. $id));
          }else{
            $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey

            $data = [
              'seller_unique_id	' => $this->Product_Model->getSellerId($id),
              'unique_id'         =>$unik, 
              'OrUnitPrice'       => $this->Product_Model->getUnitPrice($id), 
              'PaymentMethod'     => $this->input->post('PaymentMethod'),    
              'Quantity' 	        => $this->input->post('Quantity'),  
              'UnitQuan'          => $this->Product_Model->getUnitQuantity($id),
              'Total_Price' 	    => $this->input->post('Total_Price'), 
              'charge'            => $this->Product_Model->getShip($id),
              'Reciept' 	        => 'CashOnDelievery',
              'p_id' 			        => $id
            ];
            $product = new Product_Model;
            $res = $product->insertOrder($data);

            $datanewStocks = [
              'p_stocks' => $this->input->post('newStocks')
            ];
            $res = $product->updateStocks($datanewStocks, $id);
            redirect(base_url('myCart/'. $id));
          }

        }else{
          //$sellerData['product'] = $this->Product_Model->getSellerId($id);

          
          $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
          $p_filename = $this->upload->data('file_name');
          $data = [
            'seller_unique_id	' => $this->Product_Model->getSellerId($id),
            'unique_id'         =>$unik, 
            'PaymentMethod'     => $this->input->post('PaymentMethod'),    
            'Quantity' 	        => $this->input->post('Quantity'),  
            'Total_Price' 	    => $this->input->post('Total_Price'), 
            'charge'            => $this->Product_Model->getShip($id),
            'Reciept' 	        => $p_filename,
            'p_id' 			        => $id
          ];
          $product = new Product_Model;


          $dataX = [
            'Balance'     => $this->input->post('Remaining'),    
          ];
          $res = $product->insertOrder($data);
          $res = $product->updateBalance($dataX, $unik);

          redirect(base_url('myCart/'. $id));
        }
      }else{
        echo 'error!!!';
      }
    }
    public function orderedCod($id){
      if(	$this->input->post('Quantity') != null ){
        $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
        $data = [
          'seller_unique_id	' => $this->Product_Model->getSellerId($id),
          'unique_id'         =>$unik, 
          'PaymentMethod'     => $this->input->post('PaymentMethod'),    
          'Quantity' 	        => $this->input->post('Quantity'),  
          'Total_Price' 	    => $this->input->post('Total_Price'), 
          'charge'            => $this->Product_Model->getShip($id),
          'p_id' 			        => $id
        ];
        $product = new Product_Model;

        $res = $product->insertOrder($data);
        redirect(base_url('myCart/'. $id));
      }else{
        echo 'error!!!';
      }
    }
    
    
    
    
    /*
    public function cart($id){

      if($this->input->post('PaymentMethod') == 'none'){
        
        $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
        $cart_id = substr(md5(microtime()), rand(0,25), 6);
        $data = [
          'cart_id' => $cart_id,
          'seller_unique_id	' => $this->Product_Model->getSellerId($id),
          'unique_id' =>$unik, 
          'Quantity' 	=> $this->input->post('Quantity'),  
          'Total_Price' 	=> $this->input->post('Total_Price'),  
          'p_id' 			=> $id
        ];
        $product = new Product_Model;
        $res = $product->insertCart($data);

        redirect(base_url('myCart/'. $id));

      }else if($this->input->post('PaymentMethod') == 'COD'){

        $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
        $data = [
          'PaymentMethod'     => $this->input->post('PaymentMethod'), 
          'Quantity' 	        => $this->input->post('Quantity'),  
          'OrUnitPrice'       => $this->Product_Model->getUnitPrice($id), 
          'UnitQuan'          => $this->Product_Model->getUnitQuantity($id),
          'seller_unique_id	' => $this->Product_Model->getSellerId($id),
          'unique_id' =>$unik, 
          'Quantity' 	=> $this->input->post('Quantity'),  
          'Total_Price' 	=> $this->input->post('Total_Price'),  
          'charge'            => $this->Product_Model->getShip($id),
          'Reciept' 	        => 'CashOnDelievery',
          'p_id' 			=> $id
        ];
        $product = new Product_Model;
        $res = $product->insertOrder($data);

        $datanewStocks = [
          'p_stocks' => $this->input->post('newStocks')
        ];
        $res = $product->updateStocks($datanewStocks, $id);
    
        redirect(base_url('myCart/'. $id));
      
      }else if($this->input->post('PaymentMethod') == 'gcash'){

        //if run need to set code to save image and condition for file image type
        $ori_filename = $_FILES['Reciept']['name'];
        $new_name = time()."".str_replace(' ', '-', $ori_filename);
        $config = [
          'upload_path' => './images/', //images directory
          'allowed_types' => 'png|jpg|gif',
          'max_size' => 3072,
          'file_name' => $new_name,
        ];

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('Reciept')){    
      
          //$sellerData['product'] = $this->Product_Model->getSellerId($id);
          $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
          $p_filename = $this->upload->data('file_name');
          $data = [
            'seller_unique_id	' => $this->Product_Model->getSellerId($id),
            'unique_id'         =>$unik, 
            'PaymentMethod'     => $this->input->post('PaymentMethod'),    
            'Quantity' 	        => $this->input->post('Quantity'),  
            'OrUnitPrice'       => $this->Product_Model->getUnitPrice($id), 
            'UnitQuan'          => $this->Product_Model->getUnitQuantity($id),
            'Total_Price' 	    => $this->input->post('Total_Price'), 
            'charge'            => $this->Product_Model->getShip($id),
            'Reciept' 	        => $p_filename,
            'p_id' 			        => $id
          ];
          $product = new Product_Model;
          $res = $product->insertOrder($data);

          $datanewStocks = [
            'p_stocks' => $this->input->post('newStocks')
          ];
          $res = $product->updateStocks($datanewStocks, $id);
          
          redirect(base_url('myCart/'. $id));
        }
      }

    }
    */
    public function cart($id){
      
      $unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
      $cart_id = substr(md5(microtime()), rand(0,25), 6);
      $data = [
        'cart_id' => $cart_id,
        'seller_unique_id	' => $this->Product_Model->getSellerId($id),
        'unique_id' =>$unik, 
        'Quantity' 	=> $this->input->post('Quantity'),  
        'Total_Price' 	=> $this->input->post('Total_Price'),  
        'p_id' 			=> $id
      ];
      $product = new Product_Model;

      $res = $product->insertCart($data);
      
      redirect(base_url('myCart/'. $id));
    }


  public function create(){
        
        
    $datas['sub2'] = $this->Template_Model->getData();
  
    $this->load->view('seller/sellerhead');
    $this->load->view('products/create', $datas);
    $this->load->view('seller/sellerfooter');
}
public function s() {
    $data = $this->Template_Model->scharge();
    echo json_encode($data);
}
public function rate($id){
        
      $productData['date'] = $this->Product_Model->getDate();
      $productData['Status'] = $this->Product_Model->getStatus($id);
      $productData['getDatePlant'] = $this->Product_Model->getDatePlant();
      $productData['getDateHarvest'] = $this->Product_Model->getDateHarvest();

      $productData['prod'] = $this->Product_Model->getDetails($id); //Para sa image
      $productData['product'] = $this->Product_Model->productDetails($id);
			/*echo '<pre>';  print_r($productData);
			echo '<pre>';
			die('here');  */

      $this->Template_Model->view('products/rate', $productData);
    }
    
    public function reply($id){
      $productData['date'] = $this->Product_Model->getDate();

      $productData['rate'] = $this->Product_Model->getRate($id);

      $productData['product'] = $this->Product_Model->getDetails($id); //Para sa image
      $productData['products'] = $this->Product_Model->productDetails($id);// fetch kung isnu ung seller
      $productData['buyer'] = $this->Product_Model->buyerDetails($id);// fetch kung isnu ung bu,ili\
      $this->Template_Model->view('products/reply', $productData);
    }

    public function inserRate($id){
      $this->form_validation->set_rules('rating', 	'comment', 	'required');
      
      if($this->form_validation->run())
      {
        $image_file_names = array();

        for ($i = 1; $i <= 4; $i++) {
          $image_field_name = "r_image" . $i;
  
          if ($_FILES[$image_field_name]['name']) {
              $image_config['upload_path'] = './upload/rate/';
              $image_config['allowed_types'] = 'jpg|jpeg|png|gif';
              $image_config['max_size'] = 2048;//////////////////

              $this->load->library('upload', $image_config);
              $this->upload->initialize($image_config);
  
              if ($this->upload->do_upload($image_field_name)) {
                  $image_data = $this->upload->data();
                  $image_file_names[] = $image_data['file_name'];
              } else {
                  // Handle image upload error for this field
                  // You can add error handling or redirect back to the form
              }
          }
        }

        $unik = $this->session->userdata('auth_user')['unique_id'];
        $data = [
          'unique_id' => $unik,
          'rating' => $this->input->post('rating'),
          'comment' => $this->input->post('comment'),
          'p_id' 			=> $id,

          'rate1' => (!empty($image_file_names[0])) ? $image_file_names[0] : null,
          'rate2' => (!empty($image_file_names[1])) ? $image_file_names[1] : null,
          'rate3' => (!empty($image_file_names[2])) ? $image_file_names[2] : null,
          'rate4' => (!empty($image_file_names[3])) ? $image_file_names[3] : null,
         
        ];
      
        $product = new Product_Model;
        $res = $product->insertRating($data);

        date_default_timezone_set('Asia/Manila'); 
        $current_date = date('Y-m-d h:i A'); 
        $date = date('Y-m-d h:i A', strtotime($current_date));
        
        $completed = "Completed";
        $data_Status = [
          'date_completed' => $date,
          'Status' => $completed
        ];

        $product->Update_Status($data_Status, $id);
        $this->session->set_flashdata('status', 'Product Inserted Successfully');
        redirect(base_url('productDetails/'. $id));
      }
    
    }

    public function sendReply($id){
      $this->form_validation->set_rules('comment', 	'required');
      if($this->form_validation->run()){
        $unik = $this->session->userdata('auth_user')['unique_id'];
        $data = [
          'unique_id' => $unik,
          'comment' => $this->input->post('comment'),
          'p_id' 			=> $id
        ];
      
        $product = new Product_Model;
        $res = $product->sendReply($data);
        $this->session->set_flashdata('status', 'Product Inserted Successfully');
        redirect(base_url('productDetails/'. $id));
      }
    }
    public function index(){
      $products = new Product_Model;
      $data['product'] = $products->getProducts();
      $this->Template_Model->view('products/index', $data);
    }
    public function view(){	
      //to pass data from databased using models and getProducts function
      $products = new Product_Model;
      $data['product'] = $products->getProducts();
      $template['product'] = $this->Product_Models->get('product');
      $this->Template_Model->view('products/view',$template, $data);
    }
    
    public function store(){

      // Handle form submission
        // Get and validate other product details (title, description, price, etc.)

        // Handle video upload
        $config['upload_path'] = './upload/videos/';
        $config['allowed_types'] = 'mp4|avi|flv';
        //$config['max_size'] = 10240; // 5MB in kilobytes  ///////////////////////////////////////////////////////
        $this->load->library('upload', $config);

         // Handle image uploads (loop through all image fields)
        $image_file_names = array();

        if (!$this->upload->do_upload('p_video')) {
            // Handle video upload error
            $video_error = $this->upload->display_errors();
            // Handle the error or redirect back to the form
            
            $this->session->set_flashdata('status', 'Error.! Video must not exceed within 10mb.');
            redirect(base_url('products/add'));
            
            //echo 'may error ka balasang';
        } else {
            $video_data = $this->upload->data();
            $video_file_name = $video_data['file_name'];

            // Handle image uploads (loop through all image fields)
            $image_file_names = array();

            for ($i = 1; $i <= 5; $i++) {
              $image_field_name = "p_image" . $i;
      
              if ($_FILES[$image_field_name]['name']) {
                  $image_config['upload_path'] = './upload/images/';
                  $image_config['allowed_types'] = 'jpg|jpeg|png|gif';
                  $image_config['max_size'] = 2048;//////////////////
                  $this->upload->initialize($image_config);
      
                  if ($this->upload->do_upload($image_field_name)) {
                      $image_data = $this->upload->data();
                      $image_file_names[] = $image_data['file_name'];
                  } else {
                      // Handle image upload error for this field
                      // You can add error handling or redirect back to the form
                  }
              }
          }
      
          $unik = $this->session->userdata('auth_user')['unique_id']; // USING SESSION TO PASS USER INFO
          $randomColor = '#' . dechex(rand(0x000000, 0xFFFFFF));

          $subCat = $this->input->get('subCategory');
          $subCat1 = $this->input->get('subCategory1');



 
          // Insert product data into the database
          $product_data = array(
              'unique_id' => $unik,
              'p_title' => $this->input->post('p_title'),
              'p_description' => $this->input->post('p_description'),
              'p_price' => $this->input->post('p_price'),
              'p_stocks' => $this->input->post('p_stocks'),
              'p_stocks_Unit' => $this->input->post('p_stocks_Unit'),
              'p_brand' => $this->input->post('p_brand'),
              'p_size' => $this->input->post('p_size'),
              'p_color' => $this->input->post('p_color'),
              'p_address' => $this->input->post('p_address'),
              'date_planted' => $this->input->post('date_planted'),
              'Actual_harvested' => $this->input->post('Actual_harvested'),
              'date_harvested' => $this->input->post('date_harvested'),
              'p_shipping' => $this->input->post('p_shipping'),
              'p_category' => $this->input->post('p_category'),
              'subCategory' => $this->input->post('subCategory'),
              'subCategory2' => $this->input->post('subCategory2'),
              'video_file' => $video_file_name,
              'image1' => (!empty($image_file_names[0])) ? $image_file_names[0] : null,
              'image2' => (!empty($image_file_names[1])) ? $image_file_names[1] : null,
              'image3' => (!empty($image_file_names[2])) ? $image_file_names[2] : null,
              'image4' => (!empty($image_file_names[3])) ? $image_file_names[3] : null,
              'image5' => (!empty($image_file_names[4])) ? $image_file_names[4] : null,

              'lat' =>$this->input->post('lat'),
              'lng' =>$this->input->post('lng'),
              'randomColor' => $randomColor,
              
              'dnum' =>$this->input->post('dnum'),
              'dprice' =>$this->input->post('dprice'),
          );
      
          $this->Product_Model->insertProduct($product_data);
          redirect(base_url('sellerproduct'));
        }
    
    }
    public function edit($id){//get the product id to espicifically edit the entire row products
      $data['product'] = $this->Product_Model->editProduct($id);
      $data['sub2'] = $this->Template_Model->getData();
      $this->load->view('seller/sellerhead');
      $this->load->view('products/edit', $data);
      $this->load->view('seller/sellerfooter');
    }
    //before mag update ng products need muna e validate kung may laman or data 
	//then need e update ung link ng image sa databased from images directory
	//last makakapag update ng product gamit ung modal with update query

  public function update($id){
    // Handle form submission for updating a product

    // Get and validate other product details (title, description, price, etc.)

    // Handle video upload if a new video is provided
    if ($_FILES['p_video']['name']) {
        $config['upload_path'] = './upload/videos/';
        $config['allowed_types'] = 'mp4|avi|flv';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('p_video')) {
            // Handle video upload error
            $video_error = $this->upload->display_errors();
            // Handle the error or redirect back to the form
        } else {
            $video_data = $this->upload->data();
            $video_file_name = $video_data['file_name'];
        }
    } else {
        // No new video provided, keep the existing video_file_name (assuming you have it)
        $video_file_name = $this->input->post('existing_video_filename');
    }

   // Handle image uploads (loop through all image fields)
    $image_file_names = array();

    for ($i = 1; $i <= 5; $i++) {
        $image_field_name = "p_image" . $i;

        if ($_FILES[$image_field_name]['name']) {
            $image_config['upload_path'] = './upload/images/';
            $image_config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $image_config);

            if ($this->upload->do_upload($image_field_name)) {
                $image_data = $this->upload->data();
                $image_file_names[] = $image_data['file_name'];
            } else {
                // Handle image upload error for this field
                // You can add error handling or redirect back to the form
            }
        }
    }

    // Check if new images were provided or keep existing image file names
    if (!empty($image_file_names)) {
        // New images were provided, update the image file names
        $updated_product_data['image1'] = (!empty($image_file_names[0])) ? $image_file_names[0] : null;
        $updated_product_data['image2'] = (!empty($image_file_names[1])) ? $image_file_names[1] : null;
        $updated_product_data['image3'] = (!empty($image_file_names[2])) ? $image_file_names[2] : null;
        $updated_product_data['image4'] = (!empty($image_file_names[3])) ? $image_file_names[3] : null;
        $updated_product_data['image5'] = (!empty($image_file_names[4])) ? $image_file_names[4] : null;
    } else {
        // No new images provided, keep the existing image file names
        $updated_product_data['image1'] = $this->input->post('existing_image1_filename');
        $updated_product_data['image2'] = $this->input->post('existing_image2_filename');
        $updated_product_data['image3'] = $this->input->post('existing_image3_filename');
        $updated_product_data['image4'] = $this->input->post('existing_image4_filename');
        $updated_product_data['image5'] = $this->input->post('existing_image5_filename');
    }

    

    // Prepare updated product data
  // Fetch the existing product data from the database based on the product ID
$existing_product_data = $this->Product_Model->getDetails($id);

// Check if the product data exists
if ($existing_product_data) {
    // Store the old price
    $old_price = $existing_product_data->p_price;

    // Update the product data
    $updated_product_data = array(
        'p_title' => $this->input->post('p_title'),
        'p_description' => $this->input->post('p_description'),
       'old_price' => $old_price, // Store the old price
        'p_price' => $this->input->post('p_price'),
        'p_stocks' => $this->input->post('p_stocks'),
        'p_brand' => $this->input->post('p_brand'),
        'p_size' => $this->input->post('p_size'),
        'p_color' => $this->input->post('p_color'),
        'p_address' => $this->input->post('p_address'),
        'date_planted' => $this->input->post('date_planted'),
        'Actual_harvested' => $this->input->post('Actual_harvested'),
        'date_harvested' => $this->input->post('date_harvested'),
        'p_shipping' => $this->input->post('p_shipping'),
        'p_category' => $this->input->post('p_category'),
        'subCategory' => $this->input->post('subCategory'),
        'subCategory2' => $this->input->post('subCategory2'),
        'video_file' => $video_file_name,
        'image1' => $updated_product_data['image1'],
        'image2' => $updated_product_data['image2'],
        'image3' => $updated_product_data['image3'],
        'image4' => $updated_product_data['image4'],
        'image5' => $updated_product_data['image5'],
        
              'dnum' =>$this->input->post('dnum'),
              'dprice' =>$this->input->post('dprice'),
    );

    $this->Product_Model->updateProduct($id, $updated_product_data);

    // Redirect to the product listing page or show a success message
    redirect(base_url('sellerproduct'));

} else {
    // Handle the case where the product data does not exist
    echo "Product not found";
}


    // Update the product in the database using the $product_id
    $this->Product_Model->updateProduct($id, $updated_product_data);

    // Redirect to the product listing page or show a success message
    redirect(base_url('sellerproduct'));

	}

	//First need e un link ung image then sa modal with the use of delete query command
	public function delete($id){
		$product = new Product_Model;
		if($product->checkProductImage($id)){
			$data = $product->checkProductImage($id);
			//check if image has value in the image directory
			if(file_exists("./upload/images/".$data->image1) && file_exists("./upload/images/".$data->image2) && file_exists("./upload/images/".$data->image3) && file_exists("./upload/images/".$data->image4) && file_exists("./upload/images/".$data->image5)){
				 unlink("./upload/images/".$data->image1);
         unlink("./upload/images/".$data->image2);
         unlink("./upload/images/".$data->image3);
         unlink("./upload/images/".$data->image4);
         unlink("./upload/images/".$data->image5);
			}
			$product = $product->deleteProduct($id);
			$this->session->set_flashdata('status', 'Deleted Successfully!');
			redirect(base_url('sellerproduct'));
		}
	}

	public function read($p_id){//get the product id to espicifically edit the entire row products 
    ///CHATTTT BX NAAAA
		$data =[];
		$data['product'] = $this->Product_Model->getProducts();
		//$data['data'] = $this->Messagemodel->ownerDetails();
		//using $data[info] to flashdata in Chat Product without using foreach
		$data['info'] = $this->Product_Model->get_by_id($p_id);
		$this->load->view('products/read', $data);
		//$this->Template_Model->view();
	}

		public function Product(){
		$data =[];
		$data['product'] = $this->Product_Model->getProducts('product');
		$this->Template_Model->view('products/read/', $data);

    /*
		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');        
		onclick="alert('Thanks for your feedback');"
    */
	}
}
?>