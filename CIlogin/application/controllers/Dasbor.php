<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	
	// Index login
	public function __construct(){
				parent::__construct();
                $this->load->library('template');
		 		$this->load->helper(array('form', 'url','html'));

                $this->load->library(array('form_validation','table','simple_login','session'));

                $this->load->model(array('Admin_model','Pembayaran_model','Kamar_model'));

                $this->load->database();

	}


	public function index() {
		
		$data = array(	'title'	=> 'Halaman Dasbor',
						'isi'	=> 'dasbor_view',
						'judul' => 'Dashboard');
		// $this->load->view('dasbor_view',$data);
		$this->template->display('layout/konten',$data); 
	}
	// Fungsi lain
	public function tampil_data()
	{
		/*$this->simple_login->cek_login();*/
        $query = $this->Admin_model->get_all();
        $data['query'] = $query;
        $data['kelola_kamar'] = $this->dasbor_m->hitungaset();
        $this->template->display('layout/konten',$data); 
	}

}