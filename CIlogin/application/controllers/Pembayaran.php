<?php
class Pembayaran extends CI_Controller {

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
		$this->load->model('Pembayaran_model');
		$this->load->database();
		
		$this->simple_login->cek_login();//memproteksi semua method
		//$this->load->library('table');
	}
	public function index()
	{
		/*$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
		);
		$this->table->set_template($template);
        $this->table->set_heading('Kode Pembayaran', 'Status', 'ID Pengunjung', 'Tanggal Booking', 'Alat Bayar', 'Tanggal Bayar');
		$query = $this->Mahasiswa_Model->get_all();
		*/
		$data['query'] = $this->Pembayaran_model->get_all();
		$data = array( 'title' => 'Data Pembayaran',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Pembayaran');
		//$data['tabel'] = $this->table->generate();
		//$this->load->view('pembayaran/index', $data);
		$this->template->display('pembayaran/index', $data);
	}
	public function tambah()
	{
		$data = array( 'title' => 'Tambah Pembayaran',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Tambah Pembayaran');
		$data['pengunjung'] = $this->Pembayaran_model->tampil_pengunjung();
		$this->template->display('pembayaran/tambah', $data);
	}
	public function simpanPembayaran()
	{
	 	$data['kd_pembayaran']=$_POST['kd_pembayaran'];
        $data['status']=$_POST['status'];
        $data['id_pengunjung']=$_POST['id_pengunjung'];
        $data['tgl_booking']=$_POST['tgl_booking'];
		$data['alat_bayar']=$_POST['alat_bayar'];
		$data['tgl_bayar']=$_POST['tgl_bayar'];
		
		$this->Pembayaran_model->tambahPembayaran($data);
		redirect('pembayaran/index');
	}
	public function edit($kd_pembayaran)
	{
		$data = array( 'title' => 'Edit Pembayaran',
                       'isi'   => 'dasbor_view',
                       'judul' => 'Edit Pembayaran');
        $where = array('kd_pembayaran' => $kd_pembayaran);
        $data['pembayaran'] = $this->Pembayaran_model->edit_data($where, 'pembayaran')->result();
		$data['pengunjung'] = $this->Pembayaran_model->tampil_pengunjung();
        $this->template->display('pembayaran/edit', $data);
	}
	public function update()
	{
        $data['status']=$_POST['status'];
        $data['id_pengunjung']=$_POST['id_pengunjung'];
        $data['tgl_booking']=$_POST['tgl_booking'];
		$data['alat_bayar']=$_POST['alat_bayar'];
		$data['tgl_bayar']=$_POST['tgl_bayar'];
		
		$where = array('kd_pembayaran' => $_POST['kd_pembayaran']);
		
		$this->Pembayaran_model->editPembayaran($where,$data);
		redirect('/pembayaran/index');
	}
	function hapus($kd_pembayaran)
	{
		$where = array('kd_pembayaran' => $kd_pembayaran);
		$this->Pembayaran_model->hapus_data($where,'pembayaran');
		redirect('/pembayaran/index');
	}
	
}
?>
