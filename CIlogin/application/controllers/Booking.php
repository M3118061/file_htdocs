<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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

                $this->load->model(array('Booking_Model','Kota_model'));

                $this->load->database();

                $this->simple_login->cek_login();

    }
	public function index()
	{
		//$this->load->view('mahasiswa/home');
         
        // $this->template->display('layout/judul',$data); 
        // $template = array(
        // 'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
        // );

        // $this->table->set_template($template);

        // $this->table->set_heading('Kode Booking', 'Tanggal Booking','Nama Pengunjung','Batas Waktu','Nama Kamar','Tipe Kamar','Kode Pembayaran','Aksi');
        
      

        // $query = $this->Mahasiswa_model->get_all();
        // foreach ($query->result() as $row)
        //         {
        //            $this->table->add_row($row->kd_booking,$row->tgl_booking,$row->nama_pengunjung,$row->batas_waktu,$row->no_kamar,$row->tipe_kamar,$row->kd_pembayaran,img('uploads/'.$row->image));
        //         }
        $data['query'] = $this->Booking_Model->get_join();

        $data = array( 'title' => 'Booking Kamar',
                        'isi'   => 'dasbor_view',
                        'judul' => 'Booking Kamar');
         // $data['tabel'] = $this->table->generate();
        $this->template->display('Booking/index',$data); 
         // $this->load->view('mahasiswa/listmhs',$data); 
         // $data = array(  'title' => 'Halaman Dasbor');
        // $data['judul'] = $this->load->view('layout/judul');
        //  $this->template->display('mahasiswa/listmhs',$data);
    }
	
	public function inputBooking(){

        $data = array( 'title' => 'Input Booking',
                        'isi'   => 'dasbor_view',
                        'judul' => 'Input Booking Kamar');
                          // $data['query'] = $this->Kota_model->get_kota();
                         $data['error']=' ';
                         $data['query_bayar'] = $this->Booking_Model->get_pembayaran();
                         $data['query_pengunjung'] = $this->Booking_Model->get_pengunjung();
                          $data['query_kamar'] = $this->Booking_Model->get_kamar();
                           $data['query_tipekamar'] = $this->Booking_Model->get_tipekamar();
                        // $this->load->view('mahasiswa/myform', $data);
                         $this->template->display('Booking/Input',$data);
        }

    public function simpanBooking(){

                $data['kd_booking']=$_POST['kd_booking'];
                $data['id_pengunjung']=$_POST['id_pengunjung'];
                $data['batas_waktu']=$_POST['batas_waktu'];
                $data['id_kamar']=$_POST['id_kamar'];
                $data['tipe_kamar']=$_POST['tipe_kamar'];
                $data['kd_pembayaran']=$_POST['kd_pembayaran'];

                $this->Booking_Model->insert_entry2($data);

                        // $this->template->display('Booking/formsuccess', $data2);
                            
                        // $this->load->view('mahasiswa/formsuccess', $data2);
                            redirect('Booking');
                        

                        // $this->load->view('mahasiswa/formsuccess',$data);
                        // redirect('/mahasiswa');
    }

    Public function deleteBooking($kd_booking){
        $where = array('kd_booking' => $kd_booking);
        $this->Booking_Model->delete($where);
        redirect('Booking');
    }
}
