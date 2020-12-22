<?php 
class pengunjung_model extends CI_Model {

        private $_table="pengunjung";
        public $id_pengunjung;
        public $nm_pengunjung;
        public $alamat_pengunjung;
        public $kontak;
        public $email;

        public function get_all(){
                $query = $this->db->get('pengunjung');
                return $query;
        }

        public function tampil_pengunjung()
        {
            $query=$this->db->get('pengunjung');
            return $query;
        }

        public function tambahPengunjung($data)
        {
                $this->db->insert('pengunjung', $data);
        }

        public function edit_data($where)
        {
            return $this->db->get_where('pengunjung', $where);
        }

        public function editPengunjung($id_pengunjung)
        {      
        $data = array(
                    'nm_pengunjung' => $this->input->post('nm_pengunjung'),
                    'alamat_pengunjung' => $this->input->post('alamat_pengunjung'),
                    'kontak' => $this->input->post('kontak'),
                    'email' => $this->input->post('email'),
                );
            $where = array('id_pengunjung' => $_POST['id_pengunjung']);
            $this->db->where($where);
            $this->db->update('pengunjung', $data);
        }

        public function delete($where, $table)
        {
            //$where = array('id_pengunjung' => $_POST['id_pengunjung']);
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function insert_entry2($data){
                $this->db->insert('pengunjung',$data);
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