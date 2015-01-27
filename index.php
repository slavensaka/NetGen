<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	require 'Car.php';
	require 'Bicycle.php';
?>



<div id="car" class="car">
<?php
//  $car = new Car(6);
//  $car->drive();
// $car->addPerson();
//$car->removePerson();
//  $bike = new Bicycle(2);
// echo $bike->getDescription();
// echo $bike->brojOsobaUVozilu;
/* 
   Ovo neće biti moguće(abstract), znači nije moguće instacirat 
   ========================================================================== */
//$lorem  = new Vehicle(3); 
$car = new Car( 4 );
echo $car->getDescription()."<br />"; // Wheeled, self-powered motor vehicle used for transportation

echo $car->drive()."<br />";; // Vehicle started!

echo $car->addPerson()."<br />";; // Cannot add person, vehicle is driving!

echo $car->stop()."<br />";; // Vehicle stopped!
echo $car->addPerson()."<br />";; // Person added!
echo $car->addPerson()."<br />";; // Person added!
echo $car->drive()."<br />";; // Cannot start vehicle, too many people!

echo $car->removePerson()."<br />";; // Person removed!
echo $car->drive()."<br />";; // Vehicle started!

echo $car->removePerson()."<br />";; // Cannot remove person, vehicle is driving!

echo $car->stop()."<br />";; // Vehicle stopped!


?>
</div>

<div id="bicycle" class="bicycle">
<?php







?>
</div>


</body>
</html>