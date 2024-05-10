<?php 
#[\AllowDynamicProperties]
class AdminModel extends CI_Model{
    public function approva(){
        $sql = "SELECT * FROM `user` WHERE `user_type` = 0;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }
        
    
    public function client(){
        $toShip = 'To-Ship';
        $this->db->select('*');
        $this->db->from('ordered_tbl');
        $this->db->join('user', 'ordered_tbl.seller_unique_id = user.unique_id' , 'LEFT');
        $this->db->join('product', 'ordered_tbl.p_id = product.id' , 'LEFT');
        $this->db->where('user.user_type', 3);
        $this->db->where('Status', $toShip);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getNewOrder(){
        $Ship = 'To-Ship';
        $this->db->select('COALESCE(COUNT(order_id), 0) AS count_result', false);
        $this->db->from('ordered_tbl');
        $this->db->where('Status', $Ship);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['count_result'];
		} else {
				// No result found
				return array('count_result' => 0);
		}
    }
    
    public function clientArr(){
        $sql = "SELECT * FROM `ordered_tbl` 
        LEFT JOIN user ON ordered_tbl.seller_unique_id = user.unique_id
        WHERE user.user_type = 3;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }
    public function clientget($id){

        $query = $this->db->get_where('user', ['user_id' => $id]);
        return $query->row();
    }
    public function getorder($id){
        
        $this->db->select('*');
        $this->db->from('ordered_tbl');
        $this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
        $this->db->where('ordered_tbl.seller_unique_id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null; // Return null when there are no results
        }
    }
    public function insertProduct($data){

        $this->db->select('Status');
        return $this->db->insert('ordered_tbl', $data);
    }	
    public function insertPrf($data, $id){

        $this->db->select('PrfDlvry');
        $this->db->where('order_id', $id);
        return $this->db->update('ordered_tbl', $data);
    }
    
    public function getProductId($id){

        $sql = "SELECT ordered_tbl.p_id FROM `ordered_tbl`
                LEFT JOIN user ON ordered_tbl.seller_unique_id = user.unique_id
                RIGHT JOIN product ON user.unique_id = product.unique_id
                WHERE ordered_tbl.p_id = product.id";

        $query = $this->db->query($sql);
        $row = $query->row();
        
        if ($row) {
                return $row->p_id;
        } else {
                return false;
        }

    }
    public function getBuyerId($id){
        $sql = "SELECT ordered_tbl.unique_id FROM `ordered_tbl` 
                LEFT JOIN user ON ordered_tbl.unique_id = user.unique_id
                WHERE ordered_tbl.seller_unique_id = $id";

         $query = $this->db->query($sql);
         $row = $query->row();
         
         if ($row) {
                 return $row->unique_id;
         } else {
                 return false;
         }
    }

    public function seller(){

        $sql = "SELECT * FROM `user` WHERE `user_type` = 3;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }
    public function scharge(){

      $sql = "SELECT * FROM `admin`;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }
    public function User(){

        $sql = "SELECT * FROM `user` WHERE `user_type` = 2;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }


    public function edit($id){

        $query = $this->db->get_where('user', ['user_id' => $id]);
        return $query->result_array();
    }

    public function data(){

        $sql = "SELECT mcrops.Crops,mcrops.hex, map.types, map.plant_date, map.harvest_date\n"

                . "FROM map\n"

                . "LEFT JOIN mcrops\n"

                . "ON mcrops.id = map.crops\n"
                . "ORDER BY `harvest_date` ASC;";
        $query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
    }
        

    public function update()
    {
        
    }


    public function countorder(){

        $this->db->select('COALESCE(COUNT(order_id), 0) AS count_result', false);
        $this->db->from('ordered_tbl');
        $query = $this->db->get();
        return $query->result_array();
        
    }

    public function sales(){
        $this->db->select('COALESCE(SUM(Total_Price) - SUM(charge), 0) AS sales', false);
        $this->db->from('ordered_tbl');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['sales'];
		} else {
				// No result found
				return array('sales' => 0);
		}
    }
    public function alluser(){
        $this->db->select('COALESCE(COUNT(user_id), 0) AS count_user', false);
        $this->db->from('user');
        $query = $this->db->get();
        //return $query->result_array();
        if ($query->num_rows() > 0) {
			// Fetch the result row as an associative array
				$result = $query->row_array();
				return $result['count_user'];
		} else {
				// No result found
				return array('count_user' => 0);
		}
    }
    public function profit(){
        $this->db->select('COALESCE((SUM(Total_Price) - SUM(charge)) * 0.03, 0) AS Profit', false);
        $this->db->from('ordered_tbl');
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
    public function getTopOrderedProducts() {
        $this->db->select('ordered_tbl.*, product.*, SUM(ordered_tbl.Total_Price) AS total');
		$this->db->from('ordered_tbl');
		$this->db->join('product', 'ordered_tbl.p_id = product.id', 'left');
		$this->db->group_by('product.id');
		$this->db->order_by('SUM(ordered_tbl.Quantity)', 'DESC');
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) 
		{
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}
    }
    public function report(){
        $this->db->select('o.Date_Added AS date');
		$this->db->select('p.p_title AS tproduct');
		$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
		$this->db->select('ROUND(SUM(o.Quantity), 2) AS quan', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
		$this->db->from('ordered_tbl AS o');
		$this->db->join('product AS p', 'o.p_id = p.id', 'left');
		$this->db->group_by('date, p.id');
		$this->db->order_by('date', 'DESC');
		$this->db->order_by('p.id');
		$query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0; // Return 0 if there are no results
        }
    }

    public function reportweek(){
        $this->db->select('WEEK(o.Date_Added) AS date');
		$this->db->select('p.p_title AS tproduct');
		$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
		$this->db->select('ROUND(SUM(o.Quantity), 2) AS quan', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
		$this->db->from('ordered_tbl AS o');
		$this->db->join('product AS p', 'o.p_id = p.id', 'left');
		$this->db->group_by('date, p.id');
		$this->db->order_by('date', 'DESC');
		$this->db->order_by('p.id');
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		} else {

			return 0; // Return 0 if there are no results
		}
    }
    public function reportmonth(){
        $this->db->select("DATE_FORMAT(o.Date_Added, '%m-%Y') AS date", FALSE);
		$this->db->select('p.p_title AS tproduct');
		$this->db->select('ROUND(SUM(o.Total_Price - o.charge), 2) AS total', FALSE);
		$this->db->select('ROUND(SUM(o.Quantity), 2) AS quan', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) * 0.03), 2) AS fee', FALSE);
		$this->db->select('ROUND((SUM(o.Total_Price - o.charge) - (SUM(o.Total_Price - o.charge) * 0.03)), 2) AS profit', FALSE);
		$this->db->from('ordered_tbl AS o');
		$this->db->join('product AS p', 'o.p_id = p.id', 'left');
		$this->db->group_by('date, p.id');
		$this->db->order_by('date', 'DESC');
		$this->db->order_by('p.id');
		$query = $this->db->get();

		
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return 0; // Return 0 if there are no results
		}

    }
    
    
    public function reportS( $column, $order, $limit, $limit1, $salesFrom, $salesTo){
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
            //$this->db->where('p.unique_id', $unik); // Replace $unique_id with your actual value
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
    public function hasCharge( $limit, $limit1, $salesFrom, $salesTo){
        date_default_timezone_set('Asia/Manila');   
        $current_date = date('Y-m-d h:i A'); 
        $date_Today = date('Y-m-d h:i A', strtotime('0 days', strtotime($current_date)));

        $this->db->select('ROUND(SUM(Total_Price - charge), 2) AS total', FALSE);//sales
        $this->db->select('ROUND((SUM(Total_Price - charge) * 0.03), 2) AS fee', FALSE);//service fee
        $this->db->select('SUM(Quantity) AS quan', FALSE);//quantity
        $this->db->select('COUNT(p_id) AS count');
        $this->db->select('ROUND((SUM(Total_Price - charge) - (SUM(Total_Price - charge) * 0.03)), 2) AS profit', FALSE); //profit
        $this->db->from('ordered_tbl');
        //$this->db->where('seller_unique_id', $unik);
        
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

    /* AGROCASH - CASH IN 

    public function users(){
        $pending = 'Pending';
        $this->db->select('agrocash.agrocash_id as agrocash_id, agrocash.unique_id as id, agrocash.name as unik, agrocash.amount as amount, agrocash.payment as payment, wallet_balance.balance as bal');
    
        $this->db->from('agrocash');
        $this->db->join('wallet_balance', 'agrocash.bal_id = wallet_balance.bal_id', 'left');
        $this->db->where('Notes', $pending);


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0; // Return 0 if there are no results
        }
    }
    */

    public function users(){
        $pending = 'Pending';
        $this->db->select('agrocash.agrocash_id as agrocash_id, agrocash.unique_id as id, agrocash.name as unik, agrocash.amount as amount, agrocash.payment as payment, wallet_balance.balance as bal');
        $this->db->from('wallet_balance');
        $this->db->join('agrocash', 'wallet_balance.bal_id = agrocash.bal_id', 'left');
        $this->db->where('status', $pending);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0; // Return 0 if there are no results
        }

    }
}