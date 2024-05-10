<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class LogoutController extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model('AuthenticationModel');
		}
		public function logout(){

			//using UNSET to reverse code in log in form
			$this->session->unset_userdata('authenticated');
			$this->session->unset_userdata('auth_user');
      $this->session->set_flashdata('status','You are Logged Out succesfully');
			redirect(base_url('login'));
		}
	}




?>