<?php 
class Mahasiswa_model extends CI_Model {

        public $username;
        public $password;
        public $email;
        public $hobby;
        public $alamat;
        public $kota_asal;
        public $jk;
        public $berkas;
        public $kota;

        public function insert_entry()
        {
                $this->username  = $_POST['username'];
                $this->password  = $_POST['password'];
                $this->email     = $_POST['email'];
                $this->hobby     = $_POST['hobby'];
                $this->alamat    = $_POST['alamat'];
                $this->kota_asal = $_POST['kota_asal'];
                $this->jk        = $_POST['jk'];
                $this->berkas        = $_POST['berkas'];
                $this->kota = $_POST['kota'];
                //$this->date     = time();

                $this->db->insert('datamhs', $this);
        }

        public function insert_entry2($data){
                $this->db->insert('datamhs',$data);
        }

        public function get_all(){
                $query = $this->db->get('datamhs');
                return $query;
        }

        public function get_join(){
               $this->db->select('*');
               $this->db->from('datamhs');
               $this->db->join('kota','kota.id = datamhs.kota_asal');
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