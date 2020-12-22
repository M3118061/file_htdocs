<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
                $this->load->model('Pengunjung_model');
                $this->load->database();
    }

    public function index()
    {
        $data['query'] = $this->Pengunjung_model->get_all();
        $data = array( 'title'  => 'Data Pengunjung',
                        'isi'   => 'dasbor_view',
                        'judul' => 'Data Pengunjung');
        $this->template->display('pengunjung/index',$data); 
    }
    
    public function tambah()
    {
        $data = array( 'title' => 'Tambah Pengunjung',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Tambah Pengunjung');
        $data['pengunjung'] = $this->Pengunjung_model->tampil_pengunjung();
        $this->template->display('pengunjung/tambah', $data);
    }

    public function simpanPengunjung()
    {
        $data['id_pengunjung']=$_POST['id_pengunjung'];
        $data['nm_pengunjung']=$_POST['nm_pengunjung'];
        $data['alamat_pengunjung']=$_POST['alamat_pengunjung'];
        $data['kontak']=$_POST['kontak'];
        $data['email']=$_POST['email'];

        $this->Pengunjung_model->tambahPengunjung($data);
        redirect('/pengunjung/index');
    }

    public function edit_data($id_pengunjung)
    {
        $data = array( 'title' => 'Edit Pengunjung',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Edit Pengunjung');
        $where = array('id_pengunjung' => $id_pengunjung);
        $data['pengunjung'] = $this->Pengunjung_model->edit_data($where, 'pengunjung')->result();
        $this->template->display('pengunjung/edit', $data);
    }

    public function update()
    {
        $data['id_pengunjung']=$_POST['id_pengunjung'];
        $data['nm_pengunjung']=$_POST['nm_pengunjung'];
        $data['alamat_pengunjung']=$_POST['alamat_pengunjung'];
        $data['kontak']=$_POST['kontak'];
        $data['email']=$_POST['email'];

        $where = array('id_pengunjung' => $_POST['id_pengunjung']);
        $this->Pengunjung_model->editPengunjung($where, $data);
        redirect('/pengunjung/index');
    }

    public function delete($id_pengunjung)
    {
        $where = array('id_pengunjung' => $id_pengunjung);
        $this->Pengunjung_model->delete($where, 'pengunjung');
        redirect('/pengunjung/index');   
    }
}
