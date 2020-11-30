<?php
class appbuah{
	public $nama;
	public $warna;
	public function __construct($nama, $warna){
		$this->nama=$nama;
		$this->warna=$warna;
	}
	public function getNama(){
		return $this->nama;
	}
	public function getWarna(){
		return $this->warna;
	}
}
?>