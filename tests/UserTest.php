<?php
class UserTest extends PHPUnit_Framework_TestCase{
	function __construct(){
		include 'src/user.php';
	}
	function testGetName(){
		$u=new User();
		$u->setName('Sarath');
		$this->assertEquals('Sarath',$u->getName(),'Name ok');
	}
}