<?php
require 'Vehicle.php';
class Car extends Vehicle {
	public function __construct($broj=0){
		$broj=abs($broj);
		parent::__construct($broj);
	}
	public function getDescription() {
		$text='Wheeled, self-powered motor vehicle used for transportation:';
		echo $text;
	}

	public function drive(){
		if(Car::getMaxPeople($this->brojOsobaUVozilu)){
			parent::drive();
		} else echo 'Cannot start vehicle, too many people!';
    
	}

	public function getMaxPeople($brojLjudi){
		if($brojLjudi <= 5 ){
			return true;
		} else return false;
    }


	


}