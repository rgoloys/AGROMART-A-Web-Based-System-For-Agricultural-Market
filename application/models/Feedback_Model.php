<?php 
#[\AllowDynamicProperties]
	class Feedback_Model extends CI_Model{
    public function getTerribleValue($id){
			// Example query to count specific values based on a condition
			$this->db->select('COUNT(*) as Terrible');
			$this->db->from('feedback_tbl');
			$this->db->where('rating', 'Terrible'); // Replace with your actual column and specific value
			$query = $this->db->get();

      
      
			// Check if the query was successful
			if ($query) {
					// Retrieve the result as an object and access the count value
					$result = $query->row();
					$count = $result->Terrible;
					return $count;
			} else {
					// Handle the case when the query fails
					return false;
			}
		}
		public function getBadValue($id){
			// Example query to count specific values based on a condition
			$this->db->select('COUNT(*) as Bad');
			$this->db->from('feedback_tbl');
			$this->db->where('rating', 'Bad'); // Replace with your actual column and specific value
			$query = $this->db->get();

			// Check if the query was successful
			if ($query) {
					// Retrieve the result as an object and access the count value
					$result = $query->row();
					$count = $result->Bad;
					return $count;
			} else {
					// Handle the case when the query fails
					return false;
			}
		}
		public function getGoodValue($id){
			// Example query to count specific values based on a condition
			$this->db->select('COUNT(*) as Good');
			$this->db->from('feedback_tbl');
			$this->db->where('rating', 'Good'); // Replace with your actual column and specific value
			$query = $this->db->get();

			// Check if the query was successful
			if ($query) {
					// Retrieve the result as an object and access the count value
					$result = $query->row();
					$count = $result->Good;
					return $count;
			} else {
					// Handle the case when the query fails
					return false;
			}
		}
    public function getSatisfiedValue($id){
			// Example query to count specific values based on a condition
			$this->db->select('COUNT(*) as Satisfied');
			$this->db->from('feedback_tbl');
			$this->db->where('rating', 'Satisfied'); // Replace with your actual column and specific value
			$query = $this->db->get();

			// Check if the query was successful
			if ($query) {
					// Retrieve the result as an object and access the count value
					$result = $query->row();
					$count = $result->Satisfied;
					return $count;
			} else {
					// Handle the case when the query fails
					return false;
			}
		}
    public function getExcellentValue($id){
			// Example query to count specific values based on a condition
			$this->db->select('COUNT(*) as Excellent');
			$this->db->from('feedback_tbl');
			$this->db->where('rating', 'Excellent'); // Replace with your actual column and specific value
			$query = $this->db->get();

			// Check if the query was successful
			if ($query) {
					// Retrieve the result as an object and access the count value
					$result = $query->row();
					$count = $result->Excellent;
					return $count;
			} else {
					// Handle the case when the query fails
					return false;
			}
		}
  }
?>