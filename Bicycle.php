<?php

class Bicycle extends Vehicle {
	public function __construct($broj=0){
		$broj=abs($broj);
		parent::__construct($broj);
	}

	public function getDescription()
    {
        $text='Human-powered, pedal-driven, single-track vehicle';
		echo $text;
    }

}