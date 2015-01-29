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
/* ==========================================================================
   Ovo neće biti moguće(abstract), znači nije moguće instacirat 
   $lorem  = new Vehicle(3); 
   ========================================================================== */

$car = new Car( 4 );
echo $car->getDescription()."<br />"; // Wheeled, self-powered motor vehicle used for transportation
echo $car->drive()."<br />"; // Vehicle started!
echo $car->addPerson()."<br />"; // Cannot add person, vehicle is driving!
echo $car->stop()."<br />"; // Vehicle stopped!
echo $car->addPerson()."<br />"; // Person added!
echo $car->addPerson()."<br />"; // Person added!
echo $car->drive()."<br />"; // Cannot start vehicle, too many people!
echo $car->removePerson()."<br />"; // Person removed!
echo $car->drive()."<br />"; // Vehicle started!
echo $car->removePerson()."<br />"; // Cannot remove person, vehicle is driving!
echo $car->stop()."<br />"; // Vehicle stopped!
echo "<br /><br />";

?>
</div>
<div id="bicycle" class="bicycle">
<?php

$bike = new Bicycle( 2 );
echo $bike->getDescription()."<br />"; // Human-powered, pedal-driven, single-track vehicle
echo $bike->drive()."<br />"; // Cannot start vehicle, too many people!
echo $bike->removePerson()."<br />"; // Person removed!
echo $bike->drive()."<br />"; // Vehicle started!
echo $bike->removePerson()."<br />"; // Cannot remove person, vehicle is driving!
echo $bike->stop()."<br />"; // Vehicle stopped!
echo $bike->removePerson()."<br />"; // Person removed!
echo $bike->drive()."<br />"; // Cannot start vehicle, vehicle is empty!
echo $bike->addPerson()."<br />"; // Person added!
echo $bike->drive()."<br />"; // Vehicle started!
echo $bike->stop()."<br />"; // Vehicle stopped!
echo $bike->removePerson()."<br />"; // Person removed!
echo $bike->removePerson()."<br />"; // Cannot remove person, vehicle is empty!

?>
</div>

<!-- Footer dio osnovni -->
<footer>
	<ul>
		<br class="clear" />
		<h4 class="foot"><a href="javascript:void(0);">Made by: Slaven Sakačić</a></h4>
	</ul>	
</footer><!-- /footer -->

</body>
</html>