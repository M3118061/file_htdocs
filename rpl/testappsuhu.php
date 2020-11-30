<?php
require_once 'appsuhu.php';
require_once 'phpunit/src/Framework/TestCase.php';
class testappsuhu extends PHPUnit\Framework\TestCase{
	public $crea;
	Public $cfrn;
	public $rcel;
	Public $rfrn;
	public $fcel;
	Public $frea;
public function setUP() {
	$suhu=new appsuhu(50,40,77);
	$this->crea=$suhu->getCelrea();
	$this->cfrn=$suhu->getCelfrn();
	$this->rcel=$suhu->getReacel();
	$this->rfrn=$suhu->getReafrn();
	$this->fcel=$suhu->getFrncel();
	$this->frea=$suhu->getFrnrea();
}
public function testcrea(){
	$this->assertEquals(40,$this->crea);
}
public function testcfrn(){
	$this->assertEquals(122,$this->cfrn);
}
public function testrcel(){
	$this->assertEquals(50,$this->rcel);
}
public function testrfrn(){
	$this->assertEquals(122,$this->rfrn);
}
public function testfcel(){
	$this->assertEquals(25,$this->fcel);
}
public function testfrea(){
	$this->assertEquals(20,$this->frea);
}
	
public function tearDown(){
		unset($this->suhu);
	}
}

?>
