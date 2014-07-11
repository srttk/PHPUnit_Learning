<?php
include 'src/Account/ac.php';
class AcTest extends PHPUnit_Framework_TestCase{

	public function testIsActive(){
		$a=new Ac();
		$this->assertTrue($a->isActive());
	}
}