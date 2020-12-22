<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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

                $this->load->model(array('Mahasiswa_model','Kota_model'));

                $this->load->database();

                $this->simple_login->cek_login();

    }
	public function index()
	{
		//$this->load->view('mahasiswa/home');
         
        // $this->template->display('layout/judul',$data); 
        $template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
        );

        $this->table->set_template($template);

        $this->table->set_heading('Username', 'Email','Hobby','Kota Asal','Jenis Kelamin','Alamat','Image');
        
        $query = $this->Mahasiswa_model->get_join();

        // $query = $this->Mahasiswa_model->get_all();
        foreach ($query->result() as $row)
                {
                   $this->table->add_row($row->username,$row->email,$row->hobby,$row->kotaasal,$row->jk,$row->alamat,img('uploads/'.$row->image));
                }
        
        $data = array( 'title' => 'Data Mahasiswa',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Data Mahasiswa');
        $data['tabel'] = $this->table->generate();
        $this->template->display('mahasiswa/listmhs',$data); 
         // $this->load->view('mahasiswa/listmhs',$data); 
         // $data = array(  'title' => 'Halaman Dasbor');
        // $data['judul'] = $this->load->view('layout/judul');
        //  $this->template->display('mahasiswa/listmhs',$data);
    }
	
	public function inputmhs(){


                $this->form_validation->set_rules('no', 'Urutan');

                $this->form_validation->set_rules(
        'username', 'Username',
        'trim|required|min_length[5]|max_length[12]|callback_username_check',
        array(
                'required'      => 'You have not provided %s.'
        ));
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                

                $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
               
                $this->form_validation->set_rules('kota_asal', 'Kota Asal', 'trim|required');

                $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');

                $this->form_validation->set_rules('hobby', 'Hobby', 'trim|required');                

                $this->load->helper('date');

                if ($this->form_validation->run() == FALSE)
                {
                          $data['query'] = $this->Kota_model->get_kota();
                         $data['error']=' ';
                        // $this->load->view('mahasiswa/myform', $data);
                         $this->template->display('mahasiswa/myform',$data);
                }
                else
                {
						// $this->Mahasiswa_model->insert_entry();
                		$config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 2000;
                        $config['max_width']            = 1500;
                        $config['max_height']           = 1500;

                         $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('image'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                // $this->load->view('mahasiswa/myform', $error);
                                 $this->template->display('mahasiswa/myform',$error);
                        }
                        else
                        {    
                            $data2 = array('upload_data' => $this->upload->data());

                            $data['username']=$_POST['username'];
                            $data['password']=$_POST['password'];
                            $data['email']=$_POST['email'];
                            $data['alamat']=$_POST['alamat'];
                            $data['kota_asal']=$_POST['kota_asal'];
                            $data['hobby']=$_POST['hobby'];
                            $data['image']=$data2['upload_data']['file_name'];
                            $data['jk']=$_POST['jk'];

                            $this->Mahasiswa_model->insert_entry2($data);

                             $this->template->display('mahasiswa/formsuccess', $data2);
                            
                            // $this->load->view('mahasiswa/formsuccess', $data2);
                            redirect('/mahasiswa');
                        }

                        // $this->load->view('mahasiswa/formsuccess',$data);
                        // redirect('/mahasiswa');
                }
        }
    public function username_check($str)
        {
    if ($str == 'admin')
    {
    	$this->form_validation->set_message('username_check', 'The {field} field can not be the word "admin"');
                        return FALSE;
     }
     	else
        {
        	return TRUE;
		}
        }
	
	public function selamatdatang(){
		echo "Selamat Datang ! </br>";
		// $this->load->view('mahasiswa/home');	
	}

	public function cetakview(){
		$this->load->view('mahasiswa/cetak');
	}

	public function cetakview2($nim,$nama){
		$data['nim']=$nim;
		$data['nama']=$nama;
		$data['status']="Aktif !";
		$this->load->view('mahasiswa/cetak2',$data);
	}

	public function arraydata(){
		$data['todo_list']=array('Sarapan','Kuliah Online','Mandi');
		$data['nimmhs']="M3118068";
		$data['namamhs']="Prayoga Yuditama";

		$this->load->view('mahasiswa/cetak3',$data);
	}
	public function arraydata2(){
		$data['todo_list']=array('Sarapan','Kuliah Online','Mandi');
		$data['nimmhs']="M3118068";
		$data['namamhs']="Prayoga Yuditama";
		$data2['tampil1']=$this->load->view('mahasiswa/cetak3',$data,TRUE);
		$data2['tampil2']="Ini Tambahan untuk cetak 3";
		$this->load->view('mahasiswa/cetak4',$data2);
	}
	
}
