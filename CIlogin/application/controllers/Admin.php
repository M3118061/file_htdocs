<?php
class Admin extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library(array('form_validation', 'table', 'simple_login', 'session'));
		$this->load->model('Admin_model');
		$this->load->database();
		
		$this->simple_login->cek_login();//memproteksi semua method
		//$this->load->library('table');
	}
	public function index()
	{
		//$template = array(
        //'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
        //);
        //$this->table->set_template($template);
        //$this->table->set_heading('ID Admin', 'Nama Admin','Password','Alamat Admin','Kontak','Email', 'Aksi');
        //$query = $this->Pengunjung_model->get_all();
        // $query = $this->Mahasiswa_model->get_all();
        //foreach ($query->result() as $row)
                //{
                   //$this->table->add_row($row->id_admin,$row->nm_admin,$row->password,$row->alamat_admin,$row->kontak,$row->email);
                //}
        
        $data['query'] = $this->Admin_model->get_all();
        $data = array( 'title'  => 'Data Admin',
                        'isi'   => 'dasbor_view',
                        'judul' => 'Data Admin');
        $this->template->display('admin/index',$data); 
        // $this->load->view('mahasiswa/listmhs',$data); 
        // $data = array(  'title' => 'Halaman Dasbor');
        // $data['judul'] = $this->load->view('layout/judul');
        //  $this->template->display('mahasiswa/listmhs',$data);
	}
	
	public function tambah()
    {
        $data = array( 'title' => 'Tambah Admin',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Tambah Admin');
        $data['admin'] = $this->Admin_model->tampil_admin();
        $this->template->display('admin/tambah', $data);
    }
	
	public function edit_data($id_admin)
    {
        $data = array( 'title' => 'Edit Admin',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Edit Admin');
        $where = array('id_admin' => $id_admin);
        $data['admin'] = $this->Admin_model->edit_data($where, 'admin')->result();
        $this->template->display('admin/edit', $data);
    }
	
	public function update()
    {
        $data['id_admin']=$_POST['id_admin'];
        $data['nm_admin']=$_POST['nm_admin'];
		$data['password']=$_POST['password'];
        $data['alamat_admin']=$_POST['alamat_admin'];
        $data['kontak']=$_POST['kontak'];
        $data['email']=$_POST['email'];

        $where = array('id_admin' => $_POST['id_admin']);
        $this->Admin_model->editAdmin($where, $data);
        redirect('/admin/index');
    }
	
	public function simpanAdmin()
    {
        $data['id_admin']=$_POST['id_admin'];
        $data['nm_admin']=$_POST['nm_admin'];
		$data['password']=$_POST['password'];
        $data['alamat_admin']=$_POST['alamat_admin'];
        $data['kontak']=$_POST['kontak'];
		$data['email']=$_POST['email'];

        $this->Admin_model->tambahAdmin($data);
        redirect('/admin/index');
    }
	
	public function delete($id_admin)
    {
        $where = array('id_admin' => $id_admin);
        $this->Admin_model->delete($where, 'admin');
        redirect('/admin/index');   
    }
	
	public function logout() {
		$this->simple_login->logout();	
	}
}
?>
