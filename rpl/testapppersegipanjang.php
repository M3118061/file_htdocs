<?php
require_once 'apppersegipanjang.php';
require_once 'phpunit/src/Framework/TestCase.php';
class testapppersegipanjang extends PHPUnit\Framework\TestCase{
	public $luas;
	public $keliling;
	
	protected function setUp(){
		$persegipanjang=new apppersegipanjang(19,15);
		$this->luas=$persegipanjang->getLuas();
		$this->keliling=$persegipanjang->getKeliling();
	}
	
	public function testluas(){
		$this->assertEquals(285,$this->luas);
	}
	
	public function testkeliling(){
		$this->assertEquals(68,$this->keliling);
	}
}
//$persegipanjang=new apppersegipanjang(19,15);
//print $persegipanjang->getLuas()."<br>";
//print $persegipanjang->getKeliling();
?>