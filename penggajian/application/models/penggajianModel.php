<?php

class PenggajianModel extends CI_model{
	
	private $_table="data_jabatan";
	public $id_jabatan;
	public $nama_jabatan;
	public $gaji_pokok;
	public $tj_transport;
	public $uang_makan;
	
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function editJabatan($id_jabatan)
        {      
        $data = array(
                    'nama_jabatan' => $this->input->post('nama_jabatan'),
                    'gaji_pokok' => $this->input->post('gaji_pokok'),
                    'tj_transport' => $this->input->post('tj_transport'),
                    'uang_makan' => $this->input->post('uang_makan'),
                );
            $where = array('id_jabatan' => $_POST['id_jabatan']);
            $this->db->where($where);
            $this->db->update('data_jabatan', $data);
        }

         public function delete($where, $table)
        {
            //$where = array('id_pengunjung' => $_POST['id_pengunjung']);
            $this->db->where($where);
            $this->db->delete($table);
        }
}

?>