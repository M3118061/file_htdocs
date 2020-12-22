<?php 
class dasbor_m extends CI_Model {

	public function hitungaset(){
		$query = $this->$db->query("SELECT * FROM kelola_kamar");
		$total = $query->num_rows();
		return $total;
	}

}
?>