<?php

class User{
	public $name=null;
	public $age=null;

	/* Set the name property */
	public function setName($name=NULL){
		$this->name=$name;
	}

	/* Return the name property */
	public function getName(){
		return $this->name;
	}

}