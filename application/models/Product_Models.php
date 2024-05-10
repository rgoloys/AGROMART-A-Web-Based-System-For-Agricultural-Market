<?php 
#[\AllowDynamicProperties]
	class Product_Models extends CI_Model{

		public function get()
		{
			//using get function to connect at product table in databased
			$query = $this->db->get('product');
			return $query->result_array();	
		}

	public function search_data($keyword, $limit, $offset) {
    // Get the list of table columns
    $columns = $this->db->list_fields('product');
    
    // Create an array to store OR conditions for each column
    $conditions = array();

    foreach ($columns as $column) {
        // Add an OR condition for each column to search for the keyword
        $conditions[] = $column . " LIKE '%" . $keyword . "%'";
    }

    // Combine the OR conditions using OR in the query
    $this->db->where("(" . implode(" OR ", $conditions) . ")", NULL, FALSE);
    
    $this->db->limit($limit, $offset); // Add limit and offset for pagination
    $query = $this->db->get('product');

    return $query->result_array(); // Return the search results as an array
}

public function count_search_results($keyword) {
    // Get the list of table columns
    $columns = $this->db->list_fields('product');

    // Create an array to store OR conditions for each column
    $conditions = array();

    foreach ($columns as $column) {
        // Add an OR condition for each column to search for the keyword
        $conditions[] = $column . " LIKE '%" . $keyword . "%'";
    }

    // Combine the OR conditions using OR in the query
    $this->db->where("(" . implode(" OR ", $conditions) . ")", NULL, FALSE);

    return $this->db->count_all_results('product');
}

	


	  public function save($p_title, $p_description, $p_price,  
		$p_stocks, $p_address,$p_category ){
		
		//this function is to saved data to databased

		
		    $data = array(

			    "p_title" => $p_title,
			    "p_description" => $p_description,
			    "p_price" => $p_price,
			    "p_stocks" => $p_stocks,
			    "p_address" => $p_address,
			    "p_category" => $p_category
			
		    );

		
		    $this->db->insert('product', $data);
		    return $this->db->insert_id();
	    }

	    //function to get product id and direct product details to its especific fields
	    public function get_by_id($product_id){

		    //using row array to eget single data in a rows table    
		    return $this->db->get_where('product', array('product_id' => $product_id))->row_array();	
	    }


	    public function myProduct($user_id){

	    	$this->db->select('*');
	    	$this->db->from('product');
	    	$this->db->join('user_tbl', 'user_tbl.id = product.user_id');
	    	return $this->db->get_where(array('id' => $user_id))->row_array();
	    }















			/** Map Sorting || SELLERPAGE */
			
/* filter of datamapping data */
public function get_sorted_data($column, $order) {
	$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data
	$this->db->select('randomColor AS hex');
	$this->db->select('p_title AS title');
	$this->db->select('date_harvested AS harvest');
	$this->db->select('product.date_planted AS plant');
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




	
	}
?>

