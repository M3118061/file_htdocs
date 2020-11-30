<?php

require_once 'appbuah.php';
require_once '../phpunit/src/Framework/TestCase.php';
class testappbuah extends PHPUnit\Framework\TestCase{
	public function setUP() :void{
		$this->buah=array(
		new appbuah('orange','orange'),
		new appbuah('apple','merah'),
		new appbuah('pisang','kuning')
		);
	}
	public function testWarna(){
		$this->assertEquals("kuning",$this->buah[2]->getWarna());
		
	}public function tearDown() :void{
		unset($this->buah);
	}
}
?>