<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
                parent::__construct();
                $this->load->library('template');
                $this->load->helper(array('form', 'url','html'));
                $this->load->library(array('form_validation','table','simple_login','session'));
                $this->load->model('Kamar_model');
                $this->load->database();
    }

	public function index()
	{   
        $data['query'] = $this->Kamar_model->get_all();
        $data = array( 'title'  => 'Data Kamar',
                        'isi'   => 'dasbor_view',
                        'judul' => 'Data Kamar');
        $this->template->display('kamar/index',$data); 
    }
	
    public function tambah()
    {
        $data = array( 'title' => 'Tambah Kamar',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Tambah Kamar',);
        $data['kelola_kamar'] = $this->Kamar_model->tampil_kamar();
        $this->template->display('kamar/tambah', $data);
    }

    public function simpanTambah()
    {
        $data['id_kamar']=$_POST['id_kamar'];
        $data['nm_kamar']=$_POST['nm_kamar'];
        $data['no_kamar']=$_POST['no_kamar'];
        $data['tipe_kamar']=$_POST['tipe_kamar'];

        $this->Kamar_model->tambahKamar($data);
        redirect('/kamar/index');
    }

    public function edit_data($id_kamar)
    {
        $data = array( 'title' => 'Edit Kamar',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Edit Kamar');
        $where = array('id_kamar' => $id_kamar);
        $data['kelola_kamar'] = $this->Kamar_model->edit_data($where, 'kelola_kamar')->result();
        $this->template->display('kamar/edit', $data);
    }

    public function update()
    {
        $data['id_kamar']=$_POST['id_kamar'];
        $data['nm_kamar']=$_POST['nm_kamar'];
        $data['no_kamar']=$_POST['no_kamar'];
        $data['tipe_kamar']=$_POST['tipe_kamar'];

        $where = array('id_kamar' => $_POST['id_kamar']);
        $this->Kamar_model->editKamar($where, $data);
        redirect('/kamar/index');
    }

    public function delete($id_kamar)
    {
        $where = array('id_kamar' => $id_kamar);
        $this->Kamar_model->delete($where, 'kelola_kamar');
        redirect('/kamar/index');   
    }

}
