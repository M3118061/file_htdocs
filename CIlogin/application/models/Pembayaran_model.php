<?php
class Pembayaran_model extends CI_Model {
		private $_table = "pembayaran";

        public $kd_pembayaran;
        public $status;
        public $id_pengunjung;
		public $tgl_booking;
		public $alat_bayar;
		public $tgl_bayar;
		
		public function get_all(){
			$query = $this->db->get('pembayaran');
			return $query;
		}
		public function tampil_pengunjung()
		{  
			$query = $this->db->get('pengunjung');
			return $query;
		}
		public function tambahPembayaran($data)
		{
			$this->db->insert('pembayaran',$data);
		}
		public function edit_data($where, $table)
		{		
			return $this->db->get_where('pembayaran',$where);
		}
		public function editPembayaran($where,$data)
		{
			$data = array
					(
						'status' => $this->input->post('status'),
						'id_pengunjung' => $this->input->post('id_pengunjung'),
						'tgl_booking' => $this->input->post('tgl_booking'),
						'alat_bayar' => $this->input->post('alat_bayar'),
						'tgl_bayar' => $this->input->post('tgl_bayar')
					);
            $where = array('id_pengunjung' => $_POST['id_pengunjung']);
			$this->db->where($where);
			$this->db->update('pembayaran',$data);
		}
		function hapus_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}
}
?>