<?php

class dataPegawai extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Pegawai";
		$data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataPegawai',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambahData()
	{
		$data['title'] = "Tambah Data Pegawai";
		$data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formTambahPegawai',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambahDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}else{
			$nik			= $this->input->POST('nik');
			$nama_pegawai	= $this->input->POST('nama_pegawai');
			$jenis_kelamin	= $this->input->POST('jenis_kelamin');
			$tanggal_masuk	= $this->input->POST('tanggal_masuk');
			$jabatan		= $this->input->POST('jabatan');
			$status			= $this->input->POST('status');
			$photo			= $_FILES['photo']['name'];
			if($photo=''){}else{
				$config ['upload_path']		= './assets/photo';
				$config ['allowed_type']	= 'jpg|jpeg|png|tiff';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('photo')){
					echo "Photo gagal upload";
				}else{
					$photo=$this->upload->data('file_name');
				}
			}
			
			$data=array(
				'nik'			=> $nik,
				'nama_pegawai'	=> $nama_pegawai,
				'jenis_kelamin'	=> $jenis_kelamin,
				'tanggal_masuk'	=> $tanggal_masuk,
				'jabatan'		=> $jabatan,
				'status'		=> $status,
				'photo'			=> $photo,
			);
			
			$this->penggajianModel->insert_data($data,'data_pegawai');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Data berhasil ditambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span></button></div>');
			
			redirect('admin/dataPegawai');
		}
	}
	
	public function _rules()
	{
		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('nama_pegawai','Nama Pegawai','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tanggal_masuk','Tanggal Masuk','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('status','Status','required');
	}
}

?>