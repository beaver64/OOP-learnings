<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
$newcar = new Car('blue', 4, 'electric');
$newTruck = new Truck(33000, 'red', 3, 'muscles');

// Moving car
echo $newcar->forward();
echo '<br> Vitesse de la voiture : ' . $newcar->getCurrentSpeed() . ' km/h' . '<br>';
echo $newcar->brake();
echo '<br> Vitesse de la voiture : ' . $newcar->getCurrentSpeed() . ' km/h' . '<br>';
echo $newcar->brake();
// Moving truck
echo $newTruck->forward();
echo '<br> Vitesse du camion : ' . $newTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $newTruck->brake();
echo '<br> Vitesse du camion : ' . $newTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $newTruck->brake();

echo $newTruck->fillingGood(33000);

echo "<br>" . $newtruck->forward();
echo "<br> Vitesse du camion : " . $newtruck->getCurrentSpeed() . " km/h <br>";
echo $newtruck->brake();
echo "<br> Vitesse du camion : " . $newtruck->getCurrentSpeed() . " km/h <br>";
echo $newtruck->brake() . "<br>";
echo "<br>";

