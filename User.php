<?php
class User{
	public $name;
	public $age;
	public function setName($username=NULL){

		$this->name=$username;
		return $this;

	}

	public function getName(){
		return $this->name;
	}

	public function setAge($age=NULL){
		$this->age=$age;
		return $this;
	}
	public function getAge(){
		return $this->age;
	}

}

