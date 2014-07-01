<?php
class UserTest extends PHPUnit_Framework_Testcase{
	public function __construct(){
		include 'User.php';
	}
	public function testSetName(){
		$u=new User();
		$u->setName("sarath");
		$this->assertTrue("sarath"==$u->getName());
	}
}