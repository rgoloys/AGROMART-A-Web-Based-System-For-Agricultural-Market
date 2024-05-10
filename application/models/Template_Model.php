<?php 
#[\AllowDynamicProperties]
class Template_Model extends CI_Model
{
	public function view($page, $data)
	{
				$this->load->view('template/header', $data /*, $displayUser*/);
				$this->load->view($page, $data);
				$this->load->view('template/footer', $data);
		/*
			to load ung kanyang header at footer in different pages using 
			$this->Template_Model->view('phpfile', $data);
			this code is use in controlers.

			Template MOdels for loading header and footer in differents page
		*/	
	}
	public function userloc($unique_id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user.unique_id', $unique_id);

    $query = $this->db->get();
    
    if ($query->num_rows() > 0) {
        $data = $query->result_array();
        echo json_encode($data);
    } else {
        // Handle the case where no records were found
        echo json_encode(array('message' => 'No records found for the given unique_id'));
    }
	}
public function scharge() {
    $sql = "SELECT * FROM `admin`;";
    $query = $this->db->query($sql);

    $data = array();
    foreach ($query->result_array() as $row) {
        array_push($data, $row);
    }

    echo json_encode($data);
    exit();
}
	function mysellermark(){

		$unique_id = $this->session->userdata('auth_user')['unique_id'];
		$this->db->select('product.p_price as price');
		$this->db->select('product.date_planted as plant');
		$this->db->select('product.date_harvested as harvest');
		$this->db->select('product.p_title as crops');
		$this->db->select('product.image1 as img');
		$this->db->select('product.p_category as cat');
		$this->db->select('product.subCategory as sub');
		$this->db->select('product.date_planted as plant');
		$this->db->select('user.sname as shop');
		$this->db->select('user.fname as fname');
		$this->db->select('user.lname as lname');
		$this->db->select('user.lname as lname');
		$this->db->select('user.address as adds');
		$this->db->select('COUNT(ordered_tbl.p_id) as count');
		$this->db->select('product.lat as lat');
		$this->db->select('product.lng as lng');
		$this->db->select('product.randomColor as hex');
		$this->db->select('product.p_address as padd');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->join('user', 'product.unique_id = user.unique_id', 'left');
		$this->db->where('user.unique_id', $unique_id);
		$this->db->order_by('count', 'ASC'); 
		$this->db->group_by('ordered_tbl.p_id');
		 // Order by the 'count' column in ascending order
		$query = $this->db->get();

		$data = array();
		foreach ($query->result_array() as $row)
		{
			array_push($data, $row);
		}
		echo json_encode($data);
		
		exit();
	}

	public function legend(){
		$this->db->select('randomColor AS hex');
		$this->db->select('p_title AS title');
		$this->db->select('date_harvested AS harvest');
		$this->db->select('p_category AS cat');
		$this->db->select('product.date_planted AS plant');
		$this->db->from('product');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}
	}

	function saverecords($data){
		$this->db->insert('map',$data);
		return true;
	}

	function dropdown(){
		$sql = "SELECT * FROM `mcrops`;";
		$query = $this->db->query($sql);
		$all = $query->result_array();
		return $all;
	}

	function markk(){
		$sql = "SELECT * FROM `mcrops`;";
	
		$query = $this->db->query($sql);
		$arrdata['data'] = $query->result_array();
		$this->load->view('seller/a' , $arrdata);
	}

	function mark(){
		$sql = "SELECT mcrops.id, map.crops, mcrops.hex, map.lat, map.lng FROM map\n"

		. "LEFT JOIN mcrops ON mcrops.id = map.crops;";
	
		$query = $this->db->query($sql);
		$data = array();
		foreach ($query->result_array() as $row)
		{
			
				array_push($data, $row);
		}
		echo json_encode($data);
		exit();
	}

	function sellermark($data, $data2, $min, $max, $hmin, $hmax, $data3) {
		$this->db->select('product.p_price AS price');
		$this->db->select('product.date_planted AS plant');
		$this->db->select('product.date_harvested AS harvest');
		$this->db->select('product.p_title AS crops');
		$this->db->select('product.image1 AS img');
		$this->db->select('product.p_category AS cat');
		$this->db->select('product.subCategory AS sub');
		$this->db->select('user.sname AS shop');
		$this->db->select('user.fname AS fname');
		$this->db->select('user.lname AS lname');
		$this->db->select('user.address AS adds');
		$this->db->select('COUNT(product.id) AS count');
		$this->db->select('product.lat AS lat');
		$this->db->select('product.lng AS lng');
		$this->db->select('product.randomColor AS hex');
		$this->db->select('product.p_address AS padd');

		$this->db->from('product');
		$this->db->join('user', 'product.unique_id = user.unique_id', 'left');



		
		if ($data !== null && $data !== "1") {
			$this->db->where('product.p_category', $data);
		}
		
		if ($data2 !== null && $data2 !== "1") {
			$this->db->where('product.p_title', $data2);
		}
		
		if ($data3 !== null && $data3 !== "1") {
			$this->db->where('product.p_address', $data3);
		}
		
		if ($min !== null && $max !== null && $min !== "*" && $max !== "*") {
			$this->db->where("product.date_planted BETWEEN '$min' AND '$max'", NULL, FALSE);
		}
		
		if ($hmin !== null && $hmax !== null && $hmin !== "*" && $hmax !== "*") {
			$this->db->where("product.date_harvested BETWEEN '$hmin' AND '$hmax'", NULL, FALSE);
		}
		
	$this->db->group_by('product.id');
		
		$query = $this->db->get();
		
		$data = array();
		foreach ($query->result_array() as $row) {
			array_push($data, $row);
		}
		echo json_encode($data);
		
		exit();
	}
function allsellermark(){
    $this->db->select('product.p_price AS price');
		$this->db->select('product.date_planted AS plant');
		$this->db->select('product.date_harvested AS harvest');
		$this->db->select('product.p_title AS crops');
		$this->db->select('product.image1 AS img');
		$this->db->select('product.p_category AS cat');
		$this->db->select('product.subCategory AS sub');
		$this->db->select('user.sname AS shop');
		$this->db->select('user.fname AS fname');
		$this->db->select('user.lname AS lname');
		$this->db->select('user.address AS adds');
		$this->db->select('COUNT(ordered_tbl.p_id) AS count');
		$this->db->select('product.lat AS lat');
		$this->db->select('product.lng AS lng');
		$this->db->select('product.randomColor AS hex');
		$this->db->select('product.p_address AS padd');

		$this->db->from('product');
		$this->db->join('ordered_tbl', 'product.id = ordered_tbl.p_id', 'left');
		$this->db->join('user', 'product.unique_id = user.unique_id', 'left');
		$this->db->group_by('product.id');
		$this->db->order_by('count', 'ASC');

		$query = $this->db->get();

		$data = array();
		foreach ($query->result_array() as $row) {
				array_push($data, $row);
		}

		echo json_encode($data);

		exit();
		}
	function filtermark($mapType){
    $this->db->select('product.p_price as price');
    $this->db->select('product.date_planted as plant');
    $this->db->select('product.date_harvested as harvest');
    $this->db->select('product.p_title as crops');
    $this->db->select('product.image1 as img');
    $this->db->select('user.sname as shop');
    $this->db->select('user.fname as fname');
    $this->db->select('user.lname as lname');
    $this->db->select('user.address as adds');
    $this->db->select('COUNT(ordered_tbl.p_id) as count');
    $this->db->select('product.lat as lat');
    $this->db->select('product.lng as lng');
    $this->db->select('product.randomColor as hex');

    $this->db->from('ordered_tbl');
    $this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
    $this->db->join('user', 'product.unique_id = user.unique_id', 'left');

    $this->db->where('p_category', $mapType);
  
    $query = $this->db->get();

    $data = array();

    foreach ($query->result_array() as $row) {
        array_push($data, $row);
    }
    echo json_encode($data);

    exit();
}


	public function getInfo(){
		$query = $this->db->get('product');
		return $query->result();
	}

	function saveseller($data){
		$this->db->insert('user',$data);
		return true;
	}

	
	public function getData(){
		$unique_id = $this->session->userdata('auth_user')['unique_id'];
		$others = 'Others';
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('unique_id', $unique_id);
		$this->db->where('subCategory', $others);
		
		$query = $this->db->get();

		// Check if the query was successful
		if ($query) {
				// Fetch the filtered data
			return $result = $query->result_array();
				// Process $result as needed
		} else {
				// Handle the query error
				echo "Error: " . $this->db->error();
		}
	}

	public function getAllData(){
		$this->db->select('mcrops.Crops, mcrops.hex, map.id, map.types, map.plant_date, map.harvest_date');
		$this->db->from('map');
		$this->db->join('mcrops', 'mcrops.id = map.crops', 'left');
		$this->db->order_by('harvest_date', 'ASC');
		
		$query = $this->db->get();

		// Check if the query was successful
		if ($query) {
				// Fetch the filtered data
			return $result = $query->result_array();
				// Process $result as needed
		} else {
				// Handle the query error
				echo "Error: " . $this->db->error();
		}
	}

	public function getLegend(){
		$query = $this->db->get('mcrops');
		return $query->result_array();
	}
	
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_seller');
		echo 'successfully been deleted';
	}


	public function LastSales($unik){
		$start = date('Y-m-01', strtotime('-1 month'));
		$end = date('Y-m-30', strtotime('-1 month'));

			$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS LTprice', FALSE);//sales
			$this->db->from('ordered_tbl AS o');
			$this->db->where('seller_unique_id', $unik);
			$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

			$query = $this->db->get();
	
			if ($query->num_rows() > 0) {
				// Fetch the result row as an associative array
					$result = $query->row_array();
					return $result['LTprice'];
			} else {
					// No result found
					return array('Tprice' => 0);
			}
	}

	public function Sales($unik){
		date_default_timezone_set('Asia/Manila');   
		$start = date('Y-m-01');
		$end = date('Y-m-31');

			$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS Tprice', FALSE);//sales
			$this->db->from('ordered_tbl AS o');
			$this->db->where('seller_unique_id', $unik);
			$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

			$query = $this->db->get();
	
			if ($query->num_rows() > 0) {
				// Fetch the result row as an associative array
					$result = $query->row_array();
					return $result['Tprice'];
			} else {
					// No result found
					return array('Tprice' => 0);
			}
	}
	public function Lastprofit($unique_id){
		$start = date('Y-m-01', strtotime('-1 month'));
		$end = date('Y-m-30', strtotime('-1 month'));


		$this->db->select('ROUND((SUM(Total_Price) - (SUM(Total_Price) * 0.03)), 2) as LProfit', false);
		$this->db->from('ordered_tbl AS o');
		$this->db->where('seller_unique_id', $unique_id);
		$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['LProfit'];
		} else {
				// No result found
				return array('LProfit' => 0);
		}
	}
	public function profit($unique_id){
		$start = date('Y-m-01');
		$end = date('Y-m-31');

		$this->db->select('ROUND((SUM(Total_Price) - (SUM(Total_Price) * 0.03)), 2) as Profit', false);
		$this->db->from('ordered_tbl AS o');
		$this->db->where('seller_unique_id', $unique_id);
		$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['Profit'];
		} else {
				// No result found
				return array('Profit' => 0);
		}
	}
	
	public function Lastcost($unique_id){
		$start = date('Y-m-01', strtotime('-1 month'));
		$end = date('Y-m-30', strtotime('-1 month'));

		$this->db->select('ROUND((SUM(Total_Price) * 0.03), 2) as Lcost', false);
		$this->db->from('ordered_tbl AS o');
		$this->db->where('seller_unique_id', $unique_id);
		$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['Lcost'];
		} else {
				// No result found
				return array('Lcost' => 0);
		}
	}
	public function cost($unique_id){
		$start = date('Y-m-01');
		$end = date('Y-m-31');

		$this->db->select('ROUND((SUM(Total_Price) * 0.03), 2) as Lcost', false);
		$this->db->from('ordered_tbl AS o');
		$this->db->where('seller_unique_id', $unique_id);
		$this->db->where('o.Date_Added BETWEEN "' . $start . '" AND "' . $end . '"');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['Lcost'];
		} else {
				// No result found
				return array('Lcost' => 0);
		}
	}
	public function getTopOrderedProducts($unique_id){
		$this->db->select('ordered_tbl.*, product.*, SUM(ordered_tbl.Total_Price) AS total');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->where('product.unique_id', $unique_id);
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'DESC');
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}
	}

		public function report($unik, $column, $order, $limit, $limit1, $salesFrom, $salesTo){
			date_default_timezone_set('Asia/Manila');   
			$current_date = date('Y-m-d h:i A'); 
			$date_Today = date('Y-m-d h:i A', strtotime('0 days', strtotime($current_date)));

				$this->db->select('UnitQuan');
				$this->db->select('o.Date_Added AS date');
				$this->db->select('p.p_title AS tproduct');
				$this->db->select('o.order_id AS order_id');
				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
				$this->db->select('SUM(o.Quantity) AS quan', FALSE);
				$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
				$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
				$this->db->from('ordered_tbl AS o');
				$this->db->join('product AS p', 'o.p_id = p.id', 'left');
				$this->db->where('p.unique_id', $unik); // Replace $unique_id with your actual value
				$this->db->where('p.unique_id IS NOT NULL');
				$this->db->group_by('date, p.id');

				// Order by the specified column and order
				if ($column === 'total' || $column === 'profit' || $column === 'Quantity') {
						$this->db->order_by($column, $order);
				} else {
						// Default to ordering by date if an invalid column is provided
						$this->db->order_by('date', 'DESC');
				}
				
				// Add the limit and offset
				if($limit != null && $limit1 == null){
					if($limit == 'more'){
						$this->db->limit($limit1);
					}else{
						$this->db->limit($limit);
					}
				}else if($limit == null && $limit1 != null){
					$this->db->limit($limit1);
				}
				

				// Add date range conditions
				if (!empty($salesFrom) && !empty($salesTo)) {
					$this->db->where("o.Date_Added BETWEEN '$salesFrom' AND '$salesTo'");
				}else{
						$this->db->where('o.Date_Added >=', $date_Today);
				}
		
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		public function hasCharge($unik, $limit, $limit1, $salesFrom, $salesTo){
			date_default_timezone_set('Asia/Manila');   
			$current_date = date('Y-m-d h:i A'); 
			$date_Today = date('Y-m-d h:i A', strtotime('0 days', strtotime($current_date)));
	
			$this->db->select('ROUND(SUM(Total_Price - charge), 2) AS total', FALSE);//sales
			$this->db->select('ROUND((SUM(Total_Price - charge) * 0.03), 2) AS fee', FALSE);//service fee
			$this->db->select('SUM(Quantity) AS quan', FALSE);//quantity
			$this->db->select('COUNT(p_id) AS count');
			$this->db->select('ROUND((SUM(Total_Price - charge) - (SUM(Total_Price - charge) * 0.03)), 2) AS profit', FALSE); //profit
			$this->db->from('ordered_tbl');
			$this->db->where('seller_unique_id', $unik);
			
				// Add date range conditions
				if (!empty($salesFrom) && !empty($salesTo)) {
					$this->db->where("Date_Added BETWEEN '$salesFrom' AND '$salesTo'");
				}else{
						$this->db->where('Date_Added >=', $date_Today);
				}

				// Add the limit and offset
				if($limit != null && $limit1 == null){
					if($limit == 'more'){
						$this->db->limit($limit1);
					}else{
						$this->db->limit($limit);
					}
				}else if($limit == null && $limit1 != null){
					$this->db->limit($limit1);
				}

			$query = $this->db->get();
		
			if ($query->num_rows() > 0) {
					return $query->result_array();	
			} else {
					return 0; // Return 0 if there are no results
			}
		}

		public function sales_this_month($unik){
			$monthYear = date('Y-m-01');
			date_default_timezone_set('Asia/Manila');   
			$current_date = date('Y-m-d h:i A'); 
			$date_Today = date('Y-m-d h:i A', strtotime('0 days', strtotime($current_date)));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				$this->db->where('o.Date_Added >=', $monthYear);

				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		
		public function sales_last_month($unik){
			$first_date_last_Month = date('Y-m-01', strtotime('-1 month'));
			$last_date_Month = date('Y-m-30', strtotime('-1 month'));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				
				$this->db->where("Date_Added BETWEEN '$first_date_last_Month' AND '$last_date_Month'");
				
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		public function sales_last2_month($unik){
			$first_date_last_Month = date('Y-m-01', strtotime('-2 month'));
			$last_date_Month = date('Y-m-30', strtotime('-2 month'));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				
				$this->db->where("Date_Added BETWEEN '$first_date_last_Month' AND '$last_date_Month'");
				
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		public function sales_last3_month($unik){
			$first_date_last_Month = date('Y-m-01', strtotime('-3 month'));
			$last_date_Month = date('Y-m-30', strtotime('-3 month'));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				
				$this->db->where("Date_Added BETWEEN '$first_date_last_Month' AND '$last_date_Month'");
				
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		public function sales_last4_month($unik){
			$first_date_last_Month = date('Y-m-01', strtotime('-4 month'));
			$last_date_Month = date('Y-m-30', strtotime('-4 month'));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				
				$this->db->where("Date_Added BETWEEN '$first_date_last_Month' AND '$last_date_Month'");
				
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}
		public function sales_last5_month($unik){
			$first_date_last_Month = date('Y-m-01', strtotime('-5 month'));
			$last_date_Month = date('Y-m-30', strtotime('-5 month'));

				$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);//sales
				$this->db->from('ordered_tbl AS o');
				$this->db->where('seller_unique_id', $unik);
				
				$this->db->where("Date_Added BETWEEN '$first_date_last_Month' AND '$last_date_Month'");
				
				$query = $this->db->get();
		
				if ($query->num_rows() > 0) {
						return $query->result_array();	
						
				} else {
						return 0; // Return 0 if there are no results
				}
		}

	// sa charting ito na doughnut
	public function getTopProductIds($unik){
		$limit = 4;
		$this->db->select('ordered_tbl.Date_Added');
		$this->db->select('product.p_title AS label, SUM(ordered_tbl.Quantity) AS value');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->where('product.unique_id', $unik);
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'DESC');
		$this->db->limit($limit);						

		$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
		} else {
				return 0; // Return 0 if there are no results
		}
	}
	public function getTop_Product_Yesterday($unik){
		$limit = 4;
		date_default_timezone_set('Asia/Manila');   
		$current_date = date('Y-m-d h:i A'); 
		$date = date('Y-m-d h:i A', strtotime('-1 days', strtotime($current_date)));

		$this->db->select('ordered_tbl.Date_Added');
		$this->db->select('product.p_title AS label, SUM(ordered_tbl.Quantity) AS value');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->where('product.unique_id', $unik);
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'DESC');
		$this->db->limit($limit);
		
		$this->db->where(['Date_Added' >=$date]);						

		$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
		} else {
				return 0; // Return 0 if there are no results
		}
	}


	public function getLowProductIds($unik, $limit = 3){
		$this->db->select('product.p_title AS label, SUM(ordered_tbl.Quantity) AS value');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->where('product.unique_id', $unik);
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'ASC');
		$this->db->limit($limit);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
		} else {
				return 0; // Return 0 if there are no results
		}
	}
	
	public function reportweek($unik){
		$this->db->select('o.order_id AS order_id');
		$this->db->select('WEEK(o.Date_Added) AS date');
		$this->db->select('p.p_title AS tproduct');
		$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
		$this->db->select('ROUND(SUM(o.Quantity), 2) AS quan', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
		$this->db->from('ordered_tbl AS o');
		$this->db->join('product AS p', 'o.p_id = p.id', 'left');
		$this->db->where('p.unique_id', $unik);
		$this->db->group_by('date, p.id');
		$this->db->order_by('date', 'DESC');
		$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
		} else {

				return 0; // Return 0 if there are no results
		}
	}

	public function reportmonth($unik){
		$this->db->select("DATE_FORMAT(o.Date_Added, '%Y-%m') AS date", FALSE);
		$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
		$this->db->select('SUM(o.Quantity) AS quan');
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
		$this->db->from('ordered_tbl AS o');
		$this->db->join('product AS p', 'o.p_id = p.id', 'left');
		$this->db->where('p.unique_id', $unik); // Ensure it doesn't return null values
		$this->db->group_by('date');
		$this->db->order_by('date', 'DESC');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}
	}
	
	public function productInfo(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$this->db->select('randomColor AS hex');
		$this->db->select('p_title AS title');
		$this->db->select('p_address AS address');

		$this->db->select('date_harvested AS harvest');
		$this->db->select('Actual_harvested	 AS Aharvest');
		$this->db->select('product.date_planted AS plant');
		$this->db->from('product');
		$this->db->where('unique_id', $unik);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}
	}

/* filter of datamapping data || USERPAGE */
public function get_sorted_data_monthly($column, $order) {
	// Define your table name and date column
	$table_name = 'product';
	$date_column = 'date_harvested'; // Modify this to your date column

	// Build the SQL query to select and group by month and year
	$this->db->select("MONTH($date_column) AS month", FALSE);
	$this->db->select("YEAR($date_column) AS year", FALSE);
	$this->db->select('p_address AS address');
	$this->db->select('randomColor AS hex');
	$this->db->select('p_title AS title');
	$this->db->select("$date_column AS harvest", FALSE);
	$this->db->select('date_planted AS plant');
	$this->db->from($table_name);
	$this->db->group_by('year, month');

	// Sort the data based on the selected column and order
	if ($column === 'title') {
			$this->db->order_by('title', $order);
	} elseif ($column === 'plant') {
			$this->db->order_by('plant', $order);
	} elseif ($column === 'harvest') {
			$this->db->order_by('harvest', $order);
	}

	$query = $this->db->get();

	if ($query->num_rows() > 0) {
			$result = $query->result_array();

			// Calculate remaining days for each record
			$currentDate = new DateTime();
			foreach ($result as &$row) {
					$harvestDate = new DateTime($row['harvest']);
					$remainingDays = $currentDate->diff($harvestDate)->days;
					$row['remaining_days'] = $remainingDays;
			}

			return $result;
	} else {
			return array(); // Return an empty array if there are no results
	}
}

public function get_sorted_data_weekly($column, $order) {
	// Define your table name and date column
	$table_name = 'product';
	$date_column = 'date_harvested'; // Modify this to your date column

	// Build the SQL query to select and group by week
	$this->db->select("WEEK($date_column) AS week", FALSE);
	$this->db->select('p_address AS address');
	$this->db->select('randomColor AS hex');
	$this->db->select('p_title AS title');
	$this->db->select("$date_column AS harvest", FALSE);
	$this->db->select('date_planted AS plant');
	$this->db->from($table_name);
	$this->db->group_by('week');

	// Sort the data based on the selected column and order
	if ($column === 'title') {
			$this->db->order_by('title', $order);
	} elseif ($column === 'plant') {
			$this->db->order_by('plant', $order);
	} elseif ($column === 'harvest') {
			$this->db->order_by('harvest', $order);
	}

	$query = $this->db->get();

	if ($query->num_rows() > 0) {
			$result = $query->result_array();

			// Calculate remaining days for each record
			$currentDate = new DateTime();
			foreach ($result as &$row) {
					$harvestDate = new DateTime($row['harvest']);
					$remainingDays = $currentDate->diff($harvestDate)->days;
					$row['remaining_days'] = $remainingDays;
			}

			return $result;
	} else {
			return array(); // Return an empty array if there are no results
	}
}
public function get_sorted_data($column, $order) {
	$this->db->select('randomColor AS hex');
	$this->db->select('p_title AS title');
	$this->db->select('date_harvested AS harvest');
	$this->db->select('Actual_harvested	 AS actual');
	$this->db->select('product.date_planted AS plant');
	$this->db->select('p_address AS address');
	$this->db->from('product');

	// Sort the data based on the selected column and order
	if ($column === 'title') {
			$this->db->order_by('title', $order);
	} elseif ($column === 'plant') {
			$this->db->order_by('plant', $order);
	} elseif ($column === 'harvest') {
			$this->db->order_by('harvest', $order);
	}

	$query = $this->db->get();

	if ($query->num_rows() > 0) {
			$result = $query->result_array();

			// Calculate remaining days for each record
			$currentDate = new DateTime();
			foreach ($result as &$row) {
					$harvestDate = new DateTime($row['harvest']);
					$remainingDays = $currentDate->diff($harvestDate)->days;
					$row['remaining_days'] = $remainingDays;
			}

			return $result;
	} else {
			return array(); // Return an empty array if there are no results
	}
}
public function get_all_data($column, $order) {
	// Define your table name and date column
	$table_name = 'product';
	$date_column = 'date_harvested'; // Modify this to your date column

	// Build the SQL query to select all data
	$this->db->select('randomColor AS hex');
	$this->db->select('p_title AS title');
	$this->db->select("$date_column AS harvest", FALSE);
	$this->db->select('date_planted AS plant');
	$this->db->from($table_name);

	// Sort the data based on the selected column and order
	if ($column === 'title') {
			$this->db->order_by('title', $order);
	} elseif ($column === 'plant') {
			$this->db->order_by('plant', $order);
	} elseif ($column === 'harvest') {
			$this->db->order_by('harvest', $order);
	}

	$query = $this->db->get();

	if ($query->num_rows() > 0) {
			$result = $query->result_array();

			// Calculate remaining days for each record
			$currentDate = new DateTime();
			foreach ($result as &$row) {
					$harvestDate = new DateTime($row['harvest']);
					$remainingDays = $currentDate->diff($harvestDate)->days;
					$row['remaining_days'] = $remainingDays;
			}

			return $result;
	} else {
			return array(); // Return an empty array if there are no results
	}
}


/* FOR THE TO SHIP, DELIEVERE, CANCEL, AND RETURN COUNT FUNRTION */
	public function countShip(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$pend = 'To-Ship';
		$this->db->select('COUNT(Status) AS Status');
		$this->db->where(['seller_unique_id' => $unik]);
		$query = $this->db->get_where('ordered_tbl',['Status' => $pend]);

		if ($query->num_rows() > 0) {
			$all = $query->row(); // Use row() to fetch a single row as an object
			return $all->Status; // Access the 'Status' property of the object
		} else {
				return 0;
		}
	}
	public function countCancel(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$pend = 'Cancelled';
		$this->db->select('COUNT(Status) AS Cancelled');
		$this->db->where(['seller_unique_id' => $unik]);
		$query = $this->db->get_where('ordered_tbl',['Status' => $pend]);

		if ($query->result_array() > 0){
			$all = $query->row();
			return $all->Cancelled;
		} else {
				return 0;
		}
	}
	public function countReturn(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$pend = 'Returned';
		$this->db->select('COUNT(Status) AS Returned');
		$this->db->where(['seller_unique_id' => $unik]);
		$query = $this->db->get_where('ordered_tbl',['Status' => $pend]);

		if ($query->result_array() > 0){
			$all = $query->row();
			return $all->Returned;
		} else {
				return 0;
		}
	}
	public function countPending(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$pend = 'Pending';
		$this->db->select('COUNT(Status) AS Pending');
		$this->db->where(['seller_unique_id' => $unik]);
		$query = $this->db->get_where('ordered_tbl',['Status' => $pend]);

		if ($query->result_array() > 0){
			$all = $query->row();
			return $all->Pending;
		} else {
				return 0;
		}
	}

	public function countDelievered(){
		$unik = $this->session->userdata('auth_user')['unique_id']; 
		$pend = 'Delievered';
		$this->db->select('COUNT(Status) AS Delievered');
		$this->db->where(['seller_unique_id' => $unik]);
		$query = $this->db->get_where('ordered_tbl',['Status' => $pend]);

		if ($query->result_array() > 0){
			$all = $query->row();
			return $all->Delievered;
		} else {
				return 0;
		}
	}


	/*FOR THE SELLER PREPARATION OF ORDERS */
	
	public function userss($id){
		$sql = "SELECT * FROM `user`\n"

    . "WHERE `unique_id` = '$id';";
	$query = $this->db->query($sql);
			$all = $query->row_array();
			return $all;
	}
	public function reciept($id){
		$sql = "SELECT * FROM `ordered_tbl`\n"

		. "\n"
	
		. "LEFT JOIN product\n"
	
		. "ON product.id = ordered_tbl.p_id\n"
	
		. "WHERE`order_id` = '".$id."';";
	$query = $this->db->query($sql);
			$all = $query->row_array();
			return $all;
	}
	public function insertShip($data, $id)
	{
		return $this->db->update('ordered_tbl', $data, ['order_id' => $id]);
	}

		/*
		echo '<pre>';  print_r($);
		echo '<pre>';
		die('here'); 
		*/


		/* top 3 lows and high for welcome message */
		
// In your Template_Model.php
	public function TopProductIds($limit){
		$monthYear = date('Y-m-01');
		date_default_timezone_set('Asia/Manila');   

		$this->db->select('product.id as id, product.p_price as price, product.p_title AS title, SUM(ordered_tbl.Quantity) AS value, product.image1 as img, product.id as id');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'DESC');
		
		$this->db->where('ordered_tbl.Date_Added >=', $monthYear);
		$this->db->limit($limit);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
		} else {
				return false; // Return 0 if there are no results
		}
	}
}
