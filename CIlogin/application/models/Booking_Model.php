<?php 
class Booking_Model extends CI_Model {

        private $_table= "booking_kamar";
        public $kd_booking;
        public $tgl_booking;
        public $id_pengunjung;
        public $nm_pengunjung;
        public $batas_waktu;
        public $id_kamar;
         public $nm_kamar;
        public $tipe_kamar;
        public $kd_pembayaran;

        public function insert_entry()
        {
                $this->kd_booking  = $_POST['kd_booking'];
                $this->tgl_booking  = $_POST['tgl_booking'];
                $this->id_pengunjung     = $_POST['id_pengunjung'];
                $this->nm_pengunjung     = $_POST['nm_pengunjung'];
                $this->batas_waktu     = $_POST['batas_waktu'];
                $this->id_kamar    = $_POST['id_kamar'];
                $this->tipe_kamar = $_POST['tipe_kamar'];
                $this->kd_pembayaran        = $_POST['kd_pembayaran'];
                //$this->date     = time();

                $this->db->insert('booking_kamar', $this);
        }

        public function insert_entry2($data){
                $this->db->insert('booking_kamar',$data);
        }

        public function edit_booking($where)
        {
           
            return $this->db->get_where('booking_kamar', $where);
        }

        public function delete($kd_booking){
               $query = $this->db->delete("booking_kamar",$kd_booking);
               if ($query) {
                   return true;
               }else{
                return false;
               }
        }

        public function updateB($kd_booking){
           $data = array(
                    // 'tgl_booking' => $this->input->post('tgl_booking'),
                    // 'tgl_bayar' => $this->input->post('tgl_bayar'),
                    // 'id_pengunjung' => $this->input->post('id_pengunjung'),
                    'batas_waktu' => $this->input->post('batas_waktu'),
                    // 'id_kamar' => $this->input->post('id_kamar'),
                    // 'tipe_kamar' => $this->input->post('tipe_kamar'),
                    // 'kd_pembayaran' => $this->input->post('kd_pembayaran'),
                );
            $where = array('kd_booking' => $_POST['kd_booking']);
            $this->db->where($where);
            $this->db->update('booking_kamar', $data);
        }

        public function update($data){
            $this->db->insert('pengunjung', $data);
        }

        public function get_all($kd_booking){
                $this->db->select('*');
               $this->db->from('booking_kamar');
               $this->db->where('kd_booking',$kd_booking);
                return $this->db->get();
        }

        public function get_pembayaran(){
                $query = $this->db->get('pembayaran');
                return $query;
        }
        public function get_pengunjung(){
                $query = $this->db->get('pengunjung');
                return $query;
        }
        public function get_kamar(){
                $query = $this->db->get('kelola_kamar');
                return $query;
        }
        public function get_tipekamar(){
                $query = $this->db->get('tipe_kamar');
                return $query;
        }

        public function get_join(){
               $this->db->select('*');
               $this->db->from('booking_kamar');
               $this->db->join('pengunjung','pengunjung.id_pengunjung = booking_kamar.id_pengunjung');
               $this->db->join('kelola_kamar','kelola_kamar.id_kamar = booking_kamar.id_kamar');
               $this->db->join('pembayaran','pembayaran.kd_pembayaran = booking_kamar.kd_pembayaran');
               $query = $this->db->get();
               return $query;
        }
        
        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}
?>