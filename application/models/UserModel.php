<?php
	#[\AllowDynamicProperties]
	class UserModel extends CI_Model{

		/*databased quesry for emails and password user input into databased if correct*/
		public function loginUser($data){
			$this->db->select('*');
			$this->db->where('email', $data['email']);
			$this->db->where('password', $data['password']);
			$this->db->from('user');
			$this->db->limit(1);

			$query =$this->db->get();
			if($query->num_rows() == 1){
				return $query->row();
			}else{
				return false;
			}
		}
		public function login($data){//getting user email and pass to the db
			$data = $this->db->get_where('user', array('email'=>$data['email'], 'password'=>$data['password']));
			if($data->num_rows() > 0){
						return $data->result_array();
			}else{
						return false;
			}
		}
		/* to connect data to databased table for inserting data ung registration form*/
		public function registerUser($data){
			//return $this->db->insert('user', $data); 
			$this->db->insert('user', $data); 
		}
		public function idUpdate(){
			$this->db->select('unique_id');
			$unique_id = $this->db->get('user')->result_array();
	
			$totalId = count($unique_id);
			for ($i=0; $i < $totalId; $i++) {
				$data = $unique_id[$i]['unique_id'];
				$count = $i + 1;
				$this->db->query("UPDATE user SET user_id = '$count' WHERE unique_id = '$data'");
			}
		}
		public function checkEmail($email){//checking of email
			$this->db->select('email');
			$this->db->where('email',$email);
			$this->email = $this->db->get('user');
			return $this->email->result_array();
		}
		public function getUsr($unique_id){
			
			$this->db->select('user.user_id as user_id');
			$query = $this->db->get_where('user', ['unique_id' == $unique_id]);
			
			if ($query->result_array() > 0){
				$all = $query->row_array();
				return $all['user_id'];
			} else {
					return 0;
			}
		}

		public function getOrdr(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];

			$this->db->select('*');
	    $this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$query = $this->db->get_where('ordered_tbl',['ordered_tbl.unique_id' => $unique_id]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();

					return $all;
			} else {
					return 0;
			}
		}
		
		public function getCart(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];

			$this->db->select('*');
	        $this->db->join('product', 'cart.p_id = product.id', 'LEFT');
			$this->db->join('user', 'cart.unique_id = user.unique_id', 'LEFT');
			$this->db->order_by('cart.Date_Added', 'DESC'); 
			$query = $this->db->get_where('cart',['cart.unique_id' => $unique_id]);
			
			if ($query->result_array() > 0) {
				$all = $query->result_array();

					return $all;
			} else {
					return 0;
			}
		}

		public function getPending(){  
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$pend = 'Pending';
			$this->db->select('*');
			$this->db->select('ordered_tbl.Date_Added as date');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$this->db->where(['ordered_tbl.unique_id' => $unique_id]);
			$this->db->order_by('date', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.Status' => $pend]);

			if ($query->result_array() > 0) {
				$all = $query->result_array();
				return $all;
			} else {
					return 0;
			}
		}
		public function getToship(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$pend = 'To-Ship';
			$this->db->select('*');
			$this->db->select('ordered_tbl.dateShip as dateShip');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$this->db->where(['ordered_tbl.unique_id' => $unique_id]);
			$this->db->order_by('dateShip', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.Status' => $pend]);

			if ($query->result_array() > 0){
				$all = $query->result_array();
				return $all;
			} else {
					return 0;
			}
		}
		public function getDelievered(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$pend = 'Delievered';
			$this->db->select('*');
			$this->db->select('ordered_tbl.date_delievered as 	date_delievered');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$this->db->where(['ordered_tbl.unique_id' => $unique_id]);
			$this->db->order_by('date_delievered', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.Status' => $pend]);

			if ($query->result_array() > 0){
				$all = $query->result_array();
				return $all;
			} else {
					return 0;
			}
		}

		public function getcompleted(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$pend = 'Completed';
			$this->db->select('*');
			$this->db->select('ordered_tbl.date_completed as date_completed');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$this->db->where(['ordered_tbl.unique_id' => $unique_id]);
			$this->db->order_by('date_completed', 'DESC'); 
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.Status' => $pend]);

			if ($query->result_array() > 0){
				$all = $query->result_array();
				return $all;
			} else {
					return 0;
			}
		}
		public function getCancel(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$pend = 'Cancelled';
			$this->db->select('*');
			$this->db->select('ordered_tbl.date_cancel as date_cancel');
			$this->db->join('product', 'ordered_tbl.p_id = product.id', 'LEFT');
			$this->db->join('user', 'ordered_tbl.unique_id = user.unique_id', 'LEFT');
			$this->db->where(['ordered_tbl.unique_id' => $unique_id]);
			$this->db->order_by('date_cancel', 'DESC');
			$query = $this->db->get_where('ordered_tbl', ['ordered_tbl.Status' => $pend]);

			if ($query->result_array() > 0){
				$all = $query->result_array();
				return $all;
			} else {
					return 0;
			}
		}

		public function getMyInfo(){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			$query = $this->db->get_where('user', ['unique_id' => $unique_id]);
			return $query->row();
		}


		public function get_by_id(){

			$query = $this->db->get('user');
			return $query->result();
		}

		public function editInfo($id){
			$unique_id = $this->session->userdata('auth_user')['unique_id'];

			$this->db->select('*');
			$query = $this->db->get_where('user', ['unique_id' => $unique_id]);
			return $query->row();
			
		}
		public function updateInfo($data, $id){
			return $this->db->update('user', $data, ['unique_id' => $id]);
		}
		
		public function deleteOrder($id){
			return $this->db->delete('cart', ['cart_id' => $id]);
		}
		public function cancelOrder($data, $id){
			return $this->db->update('ordered_tbl', $data, ['order_id' => $id]);
			
		}



		/** AGRO-CASH */
		public function cashIn($data){
			$this->db->insert('agrocash', $data); 
		}
		public function getBlance(){
			$id = $this->session->userdata('auth_user')['unique_id'];
			$this->db->select('balance as am');
			$query = $this->db->get_where('wallet_balance', ['unique_id' => $id]);
			return $query->row_array();
		}
		
		public function getBlance_Transac(){
			$id = $this->session->userdata('auth_user')['unique_id'];

			$this->db->select('status');
			$this->db->select('amount');
			$query = $this->db->get_where('agrocash', ['unique_id' => $id]);
			return $query->row_array();
		}

		public function activate($data){
			$this->db->Insert('wallet_balance', $data);
		}
		public function activated($datas, $unik){
			$this->db->where('unique_id', $unik); // Assuming 'id' is the primary key of your product table
			$this->db->update('user', $datas);
		}

		public function newBal($data, $id){
			$this->db->where('unique_id', $id);
			$this->db->update('wallet_balance', $data);
		}
		public function stats($data, $A_id){
			
			
			$this->db->where('amount', $A_id);
			$this->db->update('agrocash', $data);
		}

		public function getBal_id($id){
			$this->db->select('bal_id');
			$query = $this->db->get_where('wallet_balance', ['unique_id' => $id]);
		
			//$query = $this->db->query('SELECT unique_id FROM product WHERE id == $id ');
			$row = $query->row();
			
			if ($row) {
					return $row->bal_id;
			} else {
					return false;
			}
		}
	}
?>