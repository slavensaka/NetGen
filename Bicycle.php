<?php

class Bicycle extends Vehicle {
	public function __construct($broj=0){
		$broj=abs($broj);
		parent::__construct($broj);
	}

	public function getDescription()
    {
       parent::getDescription();
    }

    public function drive(){
    	if(Bicycle::getMaxPeople($this->brojOsobaUVozilu)){
    		parent::drive();
    	} else {
    		echo 'Cannot start vehicle, too many people!';
    	}
    }
    
    public function getMaxPeople($brojLjudi){
    	if($brojLjudi <= 1) {
    		return true;
    	} else return false;
    }

}