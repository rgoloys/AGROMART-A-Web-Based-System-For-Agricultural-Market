<?php 
#[\AllowDynamicProperties]
	class Product_Model extends CI_Model{

		/* === NOTES === 

		row();  = user->user_id;
		row_array(); = user['user id'];

		*/

		public function updateBalance($dataX, $unik){//////////////////////////////////////////////////////////

			$this->db->where('id', $unik); // Assuming 'id' is the primary key of your product table
			$this->db->update('agro-balance', $dataX);
		}
		public function checkoutValue($id){
			$this->db->select('*');
			$this->db->join('product', 'cart.p_id = product.id', 'left');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'left');
			$query = $this->db->get_where('cart', ['cart_id' => $id]);
			return $query->row();
		}
		public function dlvryAddrss(){
			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data
			$this->db->select('*');
			$query = $this->db->get_where('user', ['unique_id'=> $unique_id]);
			return $query->row();
		}
		public function getProducts(){

			//Sa seller page ito para makuha lahat ng product niya
			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data
			$query = $this->db->get_where('product', ['unique_id' => $unique_id]);
			return $query->result();
		}

		
		public function getOrder(){ 
			//sa seller page para e display ung kanilang ordered product

			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data

			$this->db->select('*');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.seller_unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				
					return $all;
			} else {
					return 'no value	';
			}
		}


		public function getOrderS(){ //Get specific order of each products////////////////////////////////////////////////
			//sa seller page para e display ung kanilang ordered product

			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data

			$this->db->select('*');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
			$this->db->order_by('dateShip', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['seller_unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				
					return $all;
			} else {
					return 'no value	';
			}
		}
		public function getOrderP(){ //Get specific order of each products
			//sa seller page para e display ung kanilang ordered product

			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data

			$this->db->select('*');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
			$this->db->order_by('ordered_tbl.Date_Added', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['seller_unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				
					return $all;
			} else {
					return 'no value	';
			}
		}
		public function getOrderC(){ //Get specific order of each products
			//sa seller page para e display ung kanilang ordered product

			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data

			$this->db->select('*');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
			$this->db->order_by('ordered_tbl.date_delievered', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['seller_unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				
					return $all;
			} else {
					return 'no value	';
			}
		}
		public function getOrderD(){ //Get specific order of each products
			//sa seller page para e display ung kanilang ordered product

			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data

			$this->db->select('*');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
			$this->db->order_by('ordered_tbl.date_cancel', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['seller_unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				
					return $all;
			} else {
					return 'no value	';
			}
		}
		
		public function checkRate($id){
    		$this->db->select('f_id');
    		$query = $this->db->get_where('feedback_tbl', ['p_id' => $id]);
    		return $query->num_rows();
		}
		public function get(){	
			$query = $this->db->get('product');
			return $query->result_array();
		}
		public function editProduct($id){
			$query = $this->db->get_where('product', ['id' => $id]);
			return $query->row();
		}
		public function updateProduct($id, $updated_product_data){
			/*
			echo '<pre>';  print_r($updated_product_data);
			echo '<pre>';
			die('here'); 
			*/
				$this->db->where('id', $id);
				return $this->db->update('product', $updated_product_data);
		}
		
		public function checkProductImage($id){
			$query =$this->db->get_where('product', ['id' => $id]);
			return $query->row();
		}

		public function deleteProduct($id){

			return $this->db->delete('product', ['id' => $id]);
		}
		
   	public function getDetails($id){

			$query = $this->db->get_where('product', ['id' => $id]);
			return $query->row();
	 }
	 

		public function productDetails($id){

			$this->db->select('*');
	    $this->db->join('user', 'product.unique_id = user.unique_id', 'LEFT');
	    $query = $this->db->get_where('product', ['id' => $id]);

			return $query->row();
		}

		
		public function buyerDetails(){

			$this->db->select('*');
	    $this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
	    $query = $this->db->get('ordered_tbl', ['ordered_tbl.unique_id' == 'user.unique_id']);

			if ($query->result_array() > 0) {
				$all = $query->row();

					return $all;
			} else {
					return 0;
			}
		}

		public function getRate($id){ //name who send the feedbacks
			$this->db->select('*');
			$this->db->join('user', 'feedback_tbl.unique_id = user.unique_id', 'LEFT');
			$query = $this->db->get_where('feedback_tbl', ['p_id' => $id]);
			return $query->result_array();
		}
	
		public function avgRate($id){

			$this->db->select('AVG(rating) AS avgRate');
			$this->db->from('feedback_tbl');
			$this->db->where('p_id', $id);
			$query = $this->db->get();
			
			if ($query->result_array() > 0) {
				$all = $query->row();

					return $all;
			} else {
					return 0;
			}
		}

		public function countRate($id){

			$this->db->select('COUNT(p_id) AS countRate');
			$query = $this->db->get_where('feedback_tbl', ['p_id' => $id]);

			if ($query->result_array() > 0) {
				$all = $query->row();

					return $all;
			} else {
					return 0;
			}
		}

		public function countSold($id){

			$this->db->select('COUNT(p_id) AS countSold');
			$query = $this->db->get_where('ordered_tbl', ['p_id' => $id]);

			if ($query->result_array() > 0) {
				$all = $query->row();

					return $all;
			} else {
					return 0;
			}
		}

		public function getDatePlant(){

			$query = $this->db->select('date_planted')->from('product')->get();
			return $query->row();
		}



		public function getDateHarvest(){
			$query = $this->db->select('date_harvested')->from('product')->get();
			return $query->row();
		}

		public function getDate(){
			$query = $this->db->select('date_added')->from('feedback_tbl')->get();
			if ($query->num_rows() > 0) {
					$row = $query->row();
					
					return $row->date_added;
			} else {
					return false;
			}
		}

		public function insertProduct($data)
		{
			return $this->db->insert('product', $data);
		}
		public function insertCart($data)
		{
			$this->db->insert('cart', $data);			
		}
		public function get_product_by_id($product_id){
			$query = $this->db->get_where('product', ['id' => $product_id]);
			return $query->result_array();
		}

		
		public function getStatus($id){
			
			$query = $this->db->select('date_harvested')
												->from('product')
												->where(['id' => $id])
												->get();
			if ($query->num_rows() > 0) {
					//$row = $query->row();
					
				foreach ($query->result() as $product) {
					// Calculate the expiry date for each product
					$unixTimestamp = strtotime($product->date_harvested);
					$shelf_life_days_7 = 15 * 24 * 60 * 60;
					$shelf_life_days_15 = 20 * 24 * 60 * 60;
					$currentTimestamp = now();
					
					$fresh = 'Fresh';
					$Nearly = 'Nearly Expire';
					$Expired = 'Expired';
					$getDifference = $currentTimestamp - $unixTimestamp;

					if (  $getDifference < $shelf_life_days_7 ){
						return 	$fresh;
					} elseif( $shelf_life_days_15 > $getDifference ) {

						return $Nearly;
					} else {
						return $Expired;
					}
					
					// Store product information and expiry date in the forecast array
			}

		}
		 }
		public function getDateHarvested(){
 
			$query = $this->db->select('date_harvested')
												->from('product')
												->get();
			if ($query->num_rows() > 0) {
					$row = $query->row();

					$fresh = 15;
					$nearly = 30;
					if( $row->date_added <= $fresh ){
						return 'FRESH';
					}
					elseif($row->date_added <= $nearly){
						return 'NEARLY EXPIRE';
					} else {
						return 'EXPIRED';
					}
			} else {
					return false;
			}
		}

		public function insertOrder($data){
		  $this->db->insert('ordered_tbl', $data);								
		}

		public function insertRating($data){
			$this->db->insert('feedback_tbl', $data);	
		}

		public function sendReply($data)
		{
			$this->db->insert('reply_feedback', $data);	
		}

        /*
		public function getSellerId($id)//get the seller id in product model and store in orders_tbl
		{ 
			$this->db->select('unique_id');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->unique_id;
			} else {
					return false;
			}
		}

		public function getUnitPrice($id){ 
			$this->db->select('p_price');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_price;
			} else {
					return false;
			}
		}
		
		public function getUnitQuantity($id){ //get the seller id in product model and store in orders_tbl
			$this->db->select('p_stocks_Unit');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_stocks_Unit;
			} else {
					return false;
			}
		}
		
				public function getShip($id){

			$this->db->select('p_shipping');
			$query = $this->db->get_where('product', ['id' => $id]);
			$row = $query->row();
			
			if ($row) {
					return $row->p_shipping;
			} else {
					return false;
			}
		}
		*/
		
		public function getSellerId($id)//get the seller id in product model and store in orders_tbl
		{ 
			$this->db->select('unique_id');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->unique_id;
			} else {
					return false;
			}
		}

		public function getSeller($id)//get the seller id cart to checkout
		{ 
			$this->db->select('user.unique_id');
			$this->db->join('product', 'cart.p_id = product.id', 'left');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'left');
			$query = $this->db->get_where('cart', ['cart_id' => $id]);
			
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->unique_id;
			} else {
					return false;
			}
		}

		public function getUnitPrice($id){ 
			$this->db->select('p_price');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_price;
			} else {
					return false;
			}
		}

		public function getPrice($id){ 
			$this->db->select('p_price');

			$this->db->join('product', 'cart.p_id = product.id', 'left');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'left');
			$query = $this->db->get_where('cart', ['cart_id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_price;
			} else {
					return false;
			}
		}
		
		public function getUnitQuantity($id){ //get the seller id in product model and store in orders_tbl
			$this->db->select('p_stocks_Unit');
			$query = $this->db->get_where('product', ['id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_stocks_Unit;
			} else {
					return false;
			}
		}
		public function getQuantity($id){ //get the seller id in product model and store in orders_tbl
			$this->db->select('p_stocks_Unit');

			$this->db->join('product', 'cart.p_id = product.id', 'left');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'left');
			$query = $this->db->get_where('cart', ['cart_id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->p_stocks_Unit;
			} else {
					return false;
			}
		}
		public function getShip($id){

			$this->db->select('p_shipping');
			$query = $this->db->get_where('product', ['id' => $id]);
			$row = $query->row();
			
			if ($row) {
					return $row->p_shipping;
			} else {
					return false;
			}
		}
		public function Ship($id){

			$this->db->select('p_shipping');
			$this->db->join('product', 'cart.p_id = product.id', 'left');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'left');
			$query = $this->db->get_where('cart', ['cart_id' => $id]);
			$row = $query->row();
			
			if ($row) {
					return $row->p_shipping;
			} else {
					return false;
			}
		}

		public function updateStocks($datanewStocks, $id){

			$this->db->where('id', $id); // Assuming 'id' is the primary key of your product table
			$this->db->update('product', $datanewStocks);
		}
		public function Update_Status($data_Status, $id){

			$this->db->where('p_id', $id); // Assuming 'id' is the primary key of your product table
			$this->db->update('ordered_tbl', $data_Status);
		}





//wala pa ito

		public function read($id)
		{
			$query = $this->db->get('product');
			return $query->result();
		}

		public function get_by_id($p_id){

		    //using row array to eget single data in a rows table    
		    return $this->db->get_where('product', array('id' => $p_id))->row_array();	
	    }

			public function get_info_product(){
			
				$query = $this->db->get('product');
				return $query->result();
			}
	}
	
?>