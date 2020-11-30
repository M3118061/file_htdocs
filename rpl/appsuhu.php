<?php
class appsuhu{
	public $cel;
	public $rea;
	public $frn;
	public function __construct($cel,$rea,$frn){
		$this->cel=$cel;
		$this->rea=$rea;
		$this->frn=$frn;
	}
	public function getCelrea(){
		return 4/5*$this->cel;
	}
	public function getCelfrn(){
		return (9/5*$this->cel)+32;
	}
	public function getReacel(){
		return 5/4*$this->rea;
	}
	public function getReafrn(){
		return (9/4*$this->rea)+32;
	}
	public function getFrncel(){
		return ($this->frn-32)*5/9;
	}
	public function getFrnrea(){
		return ($this->frn-32)*4/9;
	}
}
?>