<?php
class User{
	public $name=null;
	public $age=null;

	/* Set the name property */
	public function setName($name=NULL){
		
		if(!is_null($name)){
			$this->name=$name;
			return true;	
		}
		return false;
		
	}

	/* Return the name property */
	public function getName(){
		return $this->name;
	}
	
	

}