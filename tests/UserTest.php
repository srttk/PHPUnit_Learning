<?php
class UserTest extends PHPUnit_Framework_TestCase{
	function __construct(){
		
	}

	/* assertTrue() Exampel */
	 public function testSetName(){
	 	$a=new User();
	 	$this->assertTrue($a->setName('Sarath')==true);
	 }
	/* assertEquals() Example */
	public function testGetName(){
		$u=new User();
		$u->setName('Sarath');
		$this->assertEquals('Sarath',$u->getName(),'Name ok');
	}
}