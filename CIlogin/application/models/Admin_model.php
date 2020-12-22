<?php
class Admin_model extends CI_Model {
		private $_table = "admin";

        public $id_admin;
        public $nm_admin;
        public $password;
		public $alamat_admin;
		public $kontak;
		public $email;
		
		public function get_all(){
			$query = $this->db->get('admin');
			return $query;
		}
		
		public function tampil_admin()
        {
        	$query = $this->db->get('admin');
        	return $query;
        }
		
		public function tambahAdmin($data)
        {
        	$this->db->insert('admin', $data);
        }
		
		public function edit_data($where)
		{
			return $this->db->get_where('admin', $where);
		}

        public function editAdmin($id_admin)
        {      
        $data = array(
                    'nm_admin' => $this->input->post('nm_admin'),
					'password' => $this->input->post('password'),
                    'alamat_admin' => $this->input->post('alamat_admin'),
                    'kontak' => $this->input->post('kontak'),
                    'email' => $this->input->post('email'),
                );
            $where = array('id_admin' => $_POST['id_admin']);
            $this->db->where($where);
            $this->db->update('admin', $data);
        }

        public function delete($where, $table)
        {
            //$where = array('id_admin' => $_POST['id_admin']);
            $this->db->where($where);
            $this->db->delete($table);
        }
		public function insert_entry2($data){
                $this->db->insert('admin',$data);
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