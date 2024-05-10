<?php
#[\AllowDynamicProperties]
	class AuthenticationModel extends CI_Model{

		//long method og autoload
		public function __construct(){

			parent::__construct();

			if($this->session->has_userdata('authenticated')){

				//validation if authenticated or not
				if($this->session->userdata('authenticated') == '1');{
					//For extra feature
					//echo 'your a user pakyu';
				}
			}else{
				$this->session->set_flashdata('status', 'Login first');
				redirect(base_url('login'));
			}
		}

		public function check_isAdmin(){

			//check if user is admin
			if($this->session->has_userdata('authenticated')){

				if($this->session->userdata('authenticated') != '1'){//assume 2

					//DITO CGURO MAG ASSIGN NUNG ID NUNG USER
					$this->session->set_flashdata('status', 'Login first');
					redirect(base_url('login'));
				}

			}else{

				$this->session->set_flashdata('status', 'Access Denied! Unauthorized user! You are not the Admin');
				redirect(base_url('403'));
				
			}
		}

		public function check_isUsers(){

			//check if user is admin
			if($this->session->has_userdata('authenticated')){

				if($this->session->userdata('authenticated') != '2'){//assume 1

					$this->session->set_flashdata('status', 'Login first');
					redirect(base_url('login'));
				}

			}else{

				$this->session->set_flashdata('status', 'Access Denied! Unauthorized user! You are not the Admin');
				redirect(base_url('403'));
				
			}
		}

		public function check_isSeller(){

			//check if user is admin
			if($this->session->has_userdata('authenticated')){

				if($this->session->userdata('authenticated') != '2' && '1')
				{ 
					$this->session->set_flashdata('status', 'Login first');
					redirect(base_url('login'));
				}

			}else{

				$this->session->set_flashdata('status', 'Access Denied! Unauthorized user! You are not the Admin');
				redirect(base_url('403'));
				
			}
		}
	}
?>