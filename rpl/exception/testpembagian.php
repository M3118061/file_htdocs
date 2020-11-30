<?php
require_once 'apppembagian.php';
require_once '../phpunit/src/Framework/TestCase.php';

class testpembagian extends PHPUnit\Framework\TestCase{
	$hasil;
	
	function setUp(){
		$this->hasil=new apppembagian(8,0);
	}
	function testExceptionpembagian(){
		try{
			$this->hasil->bagi();
		}
		catch(Exception $ex){
			$this->fail("pembagian tidak boleh dengan nilai 0")
		}
	}
	function tearDown(){
		unset($this->hasil)
	}
}
?>