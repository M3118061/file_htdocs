<?php

class DataJabatan extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Jabatan";
		$data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataJabatan',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambahData()
	{
		$data['title'] = "Tambah Data Jabatan";
		$data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambahDataJabatan',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambahDataAksi()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE){
			$this->tambahData();
		}
		else{
			$nama_jabatan = $this->input->post('nama_jabatan');
			$gaji_pokok   = $this->input->post('gaji_pokok');
			$tj_transport = $this->input->post('tj_transport');
			$uang_makan   = $this->input->post('uang_makan');
			
			$data = array(
			
				'nama_jabatan'	=>	$nama_jabatan,
				'gaji_pokok'	=>	$gaji_pokok,
				'tj_transport'	=>	$tj_transport,
				'uang_makan'	=>	$uang_makan,
			);
			
			$this->penggajianModel->insert_data($data,'data_jabatan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Data berhasil ditambahkan</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span></button></div>');
			
			redirect('admin/dataJabatan');
		}
	}
	
	public function edit_data($id_jabatan)
    {
        $data = array( 'title' => 'Update Data Jabatan',
                       'isi'   => 'dataJabatan',
                       'judul' => 'Update Jabatan');
        $where = array('id_jabatan' => $id_jabatan);
        $data['data_jabatan'] = $this->penggajianModel->editJabatan($where, 'data_jabatan')->result();
        $this->template->display('admin/dataJabatan', $data);
    }

    public function update()
    {
        $data['id_jabatan']=$_POST['id_jabatan'];
        $data['nama_jabatan']=$_POST['nama_jabatan'];
        $data['gaji_pokok']=$_POST['gaji_pokok'];
        $data['tj_transport']=$_POST['tj_transport'];
		$data['uang_makan']=$_POST['uang_makan'];

        $where = array('id_jabatan' => $_POST['id_jabatan']);
        $this->penggajianModel->editJabatan($where, $data);
        redirect('admin/dataJabatan');
    }
	
	public function delete($id_jabatan)
    {
        $where = array('id_jabatan' => $id_jabatan);
        $this->penggajianModel->delete($where, 'data_jabatan');
        redirect('admin/dataJabatan');   
    }
	
	public function _rules()
	{
		$this->form_validation->set_rules('nama_jabatan','nama jabatan','required');
		$this->form_validation->set_rules('gaji_pokok','gaji pokok','required');
		$this->form_validation->set_rules('tj_transport','tujangan transport','required');
		$this->form_validation->set_rules('uang_makan','uang makan','required');
	}
}

?>