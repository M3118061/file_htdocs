<?php 
class Kamar_model extends CI_Model {

        private $_table="kelola_kamar";
        public $id_kamar;
        public $nm_kamar;
        public $no_kamar;
        public $tipe_kamar;
		
        public function get_all(){
                $query = $this->db->get('kelola_kamar');
                return $query;
        }

        public function tampil_kamar()
        {
            $query=$this->db->get('kelola_kamar');
            return $query;
        }

        public function tambahKamar($data)
        {
                $this->db->insert('kelola_kamar', $data);
        }
		
		 public function edit_data($where)
        {
            return $this->db->get_where('kelola_kamar', $where);
        }

        public function editKamar($id_kamar)
        {      
        $data = array(
                    'nm_kamar' => $this->input->post('nm_kamar'),
                    'no_kamar' => $this->input->post('no_kamar'),
                    'tipe_kamar' => $this->input->post('tipe_kamar'),
                );
            $where = array('id_kamar' => $_POST['id_kamar']);
            $this->db->where($where);
            $this->db->update('kelola_kamar', $data);
        }

         public function delete($where, $table)
        {
            //$where = array('id_pengunjung' => $_POST['id_pengunjung']);
            $this->db->where($where);
            $this->db->delete($table);
        }
		
        public function insert_entry2($data){
                $this->db->insert('kelola_kamar',$data);
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