<?php

abstract class Vehicle {

	public $brojOsobaUVozilu=0;
	public $driving = false;

	/* 
		Prima početni broj osoba u vozilu   
	   ========================================================================== */
	public function __construct($broj){
		$this->brojOsobaUVozilu = $broj;
		//echo $this->brojOsobaUVozilu;	
	}

	/* 
	   Metoda vraća opis pojedinog vozila
	   ========================================================================== */
	  protected function getDescription(){
        $klasa=get_called_class();
        if($klasa=='Car'){
            $text='Wheeled, self-powered motor vehicle used for transportation';
            echo $text;     
        } else if($klasa=='Bicycle') {
            $text='Human-powered, pedal-driven, single-track vehicle';
            echo $text;
        }
    }

    /* 
       Metoda dodaje osobu u vozilo-moguće je dodati neograničen broj osoba u vozilo
       ali samo dok je vozilo zaustavljeno
       ========================================================================== */
    public function addPerson(){
    	if(!$this->driving) {
    	 $this->brojOsobaUVozilu=($this->brojOsobaUVozilu)+1;
    	 echo 'Person added!';
    	} else echo 'Cannot add person, vehicle is driving!';	
    	// echo $this->brojOsobaUVozilu;
    }	

    /* 
        metoda miče osobu iz vozila - moguće je maknuti osobu iz vozila 
        samo dok je vozilo zaustavljeno
       ========================================================================== */
    public function removePerson(){
    	if(!$this->driving){
        if($this->brojOsobaUVozilu == 0){
            echo 'Cannot remove person, vehicle is empty!';
        
    	//echo $this->brojOsobaUVozilu;
        //echo $this->brojOsobaUVozilu;
        } else {
          $this->brojOsobaUVozilu=($this->brojOsobaUVozilu)-1;
          echo 'Person removed!';
      
        }
       } else echo 'Cannot remove person, vehicle is driving!';
    }

    /* 
       pokreće vozilo - vozilo je moguće pokrenuti samo ako vozilo nije prazno
        i ako broj osoba ne premašuje broj dozvoljenih osoba
       ========================================================================== */
    public function drive() {
    	if(!empty($this->brojOsobaUVozilu)){
    		$this->driving = true;	
    		echo 'Vehicle started!';
    	} else {
    		echo 'Cannot start vehicle, vehicle is empty!';   		
    	  }
	  }

    /* 
       zaustavlja vozilo
       ========================================================================== */
    public function stop() { 	
 		   $this->driving=false;
 		   echo 'Vehicle stopped!';
    }
	
    /* 
       vraća maksimalan broj dozvoljenih osoba za pojedino vozilo
       ========================================================================== */
    // public function getMaxPeople($broj){
    // }
    
    
    
    
    
    
    
    
    
    



}