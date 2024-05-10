<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class FormController extends CI_Controller {

    public function seller(){

      $this->load->view('auth/seller');
    }
    public function register(){

      $this->load->view('auth/register');
    }
    public function login(){
      
      $this->load->view('auth/login');
    }


  }
?>