<?php
require_once '../phpunit/src/Framework/TestCase.php';
class testsederhana extends PHPUnit\Framework\TestCase{
	public function setUp():void{
		print " setup ";
	}
	public function tearDown():void{
		print " teardown ";
	}
	public function testunit(){
		print " test unit running ";
	}
}
?>