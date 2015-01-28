<?php
// Command: phpunit tests/CarTest

/* ==========================================================================
   PHPUNIT testovi za klasu Car.php
   Slično bi bilo i za klasu Bicycle
   ========================================================================== */





require 'Car.php';
require 'Bicycle.php';

class CarTest extends PHPUnit_Framework_TestCase
{

	public function testCanAddInfinitePersons(){
		$a = new Car(66);
		$b = $a->addPerson();
		$this->assertEquals('Person added!', $b);
	}

	 public function testCantAddPersonWhileDriving()
    {
        // Arrange
        $a = new Car(4);
         
        // Act
        $a->drive();
        $b = $a->addPerson();

        // Assert
        $this->assertEquals('Cannot add person, vehicle is driving!', $b);
    }

    public function testCantDriveWithMaxPeople(){
		$a = new Car(66);
		$b = $a->drive();
		$this->assertEquals('Cannot start vehicle, too many people!',$b);
		
	}

	public function testCantStartWithZeroPeople() {
		$a = new Car(0);
		$b = $a->drive();
		$this->assertNull($b);

	}

	public function testMaxPeopleReturnFalse(){
		$a = new Car(6);
		$b =  $a->getMaxPeople(6);
		$this->assertFalse($b);
	}

	public function testNegativeTurnsToAbs(){
		$a = new Car(-4);

		$this->assertEquals(4,$a->brojOsobaUVozilu);
	}



}