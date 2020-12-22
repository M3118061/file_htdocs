<?php 
class Kota_model extends CI_Model {

        public $id;
        public $kotaasal;

        public function get_kota(){
                $query = $this->db->get('kota');
                 return $query;
        }     

}
?>