<?php
require_once 'Car.php';
require_once 'Bicycle.php';
$bike = new Bicycle('#32165');
$blueCar = new Car('#68452');
// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . PHP_EOL;
// Moving car
echo $blueCar->forward();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();