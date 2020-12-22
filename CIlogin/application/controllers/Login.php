<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Index login
	public function __construct(){
				parent::__construct();
                $this->load->library('template');
		 		$this->load->helper(array('form', 'url','html'));

                $this->load->library(array('form_validation','table','simple_login','session'));

                $this->load->model(array('Mahasiswa_model','Kota_model'));

                $this->load->database();

	}

	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if($valid->run()) {
			$this->simple_login->login($username,$password);
		}
		// End fungsi login
		$this->load->view('login_view');
		 // $this->template->display('login_view',$data); 
	}
	
	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	
}