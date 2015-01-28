<?php
require 'Vehicle.php';
class Car extends Vehicle {
	public function __construct($broj=0){
		$broj=abs($broj);
		parent::__construct($broj);
	}

	 public function getDescription() {
		parent::getDescription();	
	}

	public function drive(){
		if(Car::getMaxPeople($this->brojOsobaUVozilu)){
			parent::drive();
		} else return 'Cannot start vehicle, too many people!';
	}

	public function getMaxPeople($brojLjudi){
		if($brojLjudi <= 5 ){
			return true;
		} else return false;
    }
    
}