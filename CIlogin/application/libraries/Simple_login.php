<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($nm_admin, $password) {
		$query = $this->CI->db->get_where('admin',array('nm_admin'=>$nm_admin,'password' => $password));
		if($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT nm_admin,email FROM admin where nm_admin = "'.$nm_admin.'"');
			$admin 	= $row->row();
			$email	= $admin->email;
			$this->CI->session->set_userdata('nm_admin', $nm_admin);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('email', $email);
			redirect('dasbor');
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/password salah');
			redirect('login');
		}
		return false;
	}
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('nm_admin') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect('login');
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('nm_admin');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect('login');
	}
}