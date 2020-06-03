<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
$blueCar = new Car(blue, 4, electric);
$newTruck = new Truck(33000, blue, 4, electric);
$bike = new Bicycle(blue, 4, electric);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . PHP_EOL;
// Moving car
echo $blueCar->forward();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
// Moving truck
echo $newTruck->forward();
echo '<br> Vitesse du camion : ' . $newTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $newTruck->brake();
echo '<br> Vitesse du camion : ' . $newTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $newTruck->brake();

echo (fillingGood($newtruck));