<?php
require 'Vehicle.php';
class Car extends Vehicle {

	/* ==========================================================================
       konstruktor - prima početni broj osoba u vozilu
       ========================================================================== */
	public function __construct($broj=0){
		$broj=abs($broj);
		parent::__construct($broj);
	}

	/* ==========================================================================
        getDescription - metoda vraća opis pojedinog vozila
        ========================================================================== */
	public function getDescription(){
	   parent::getDescription();	
	}

	/* ==========================================================================
        pokreće vozilo - vozilo je moguće pokrenuti samo ako vozilo nije 
        prazno i ako broj osoba ne premašuje broj dozvoljenih osoba
        ========================================================================== */
	public function drive(){
		if(Car::getMaxPeople($this->brojOsobaUVozilu)){
			parent::drive();
		} else {
			return 'Cannot start vehicle, too many people!';
		}
	}

	/* ==========================================================================
       vraća maksimalan broj dozvoljenih osoba za pojedino vozilo
       ========================================================================== */
	public function getMaxPeople($brojLjudi){
		if($brojLjudi <= 5){
			return true;
		} else return false;
    }
    
}