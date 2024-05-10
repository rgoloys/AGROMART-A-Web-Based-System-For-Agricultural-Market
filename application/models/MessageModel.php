<?php
#[\AllowDynamicProperties]
class Messagemodel extends CI_model{

	public function get(){//using get function to connect at product table in databased
		$query = $this->db->get('product');
		return $query->result_array();	
	}

	public function ownerDetails(){//Owner details getting from database

		if(isset($this->session->userdata('auth_user')['unique_id'])){
			$this->db->select('*');
			$unique_id = $this->session->userdata('auth_user')['unique_id'];
			
			$query = $this->db->get_where('user', ['unique_id' => $unique_id]);

			//$res = $this->db->get('user')->result_array();

			return $query->result_array();
		}
	}
	public function allUser(){
		
			
			$U_id = $this->session->userdata('auth_user')['unique_id'];

			$this->db->select('*');
            $this->db->where('unique_id != ',$U_id);
            $data = $this->db->get('user');
            if($data->num_rows() > 0){
                return $data->result_array();
            }else{
                return false;
            }

		
	}

	
	public function logoutUser($status, $date){//logging Out then edit to the last logout
		
		if(isset($this->session->userdata('auth_user')['unique_id'])){
			$currentSession = $this->session->userdata('auth_user')['unique_id'];
			$this->db->query("UPDATE user SET user_status = '$status' , last_logout = '$date' WHERE 
			unique_id = '$currentSession'");
		}
	}
	
	public function sentMessage($data){//Inserting Message in database
		$this->db->insert('user_messages',$data);
	}
	
	public function getmessage($data){//Getting message from database
		
		$this->db->select('*');
		$session_id = $this->session->userdata('auth_user')['unique_id'];
		$where = "sender_message_id = '$session_id' OR receiver_message_id = '$data' OR 
		sender_message_id = '$data' AND receiver_message_id = '$session_id'";
		$this->db->where($where);
		$result = $this->db->get('user_messages')->result_array();
		return $result;

	}

	public function getLastMessage($data){//Getting the Last Message
		
		$this->db->select('*');
		$session_id = $this->session->userdata('auth_user')['unique_id'];
		$where = "sender_message_id = '$session_id' AND receiver_message_id = '$data' OR 
		sender_message_id = '$data' AND receiver_message_id = '$session_id'";
		$this->db->where($where);
		$this->db->order_by('time', 'DESC');
		$result = $this->db->get('user_messages', 1)->result_array();
		return $result;
	}//getting specific user


	public function getIndividual($unique_id){
		
		$this->db->select('*');
		$this->db->where('unique_id',$unique_id);
		$res = $this->db->get('user')->result_array();
		return $res;
	}

	public function blockUser($arr){
		
		$this->db->insert('block_user',$arr);
	}
	public function unBlockUser($val1, $val2){
		
		$this->db->query("DELETE FROM block_user WHERE blocked_from = '$val1' AND blocked_to = '$val2'");
	}
	public function getBlockUserData($val1, $val2){
		
		$this->db->select('*');
		$where = "blocked_from = '$val1' AND blocked_to = '$val2' OR blocked_from = '$val2' AND blocked_to = '$val1'";
		$this->db->where($where);
		$res = $this->db->get('block_user')->result_array();

		return $res;
	}
}


?>