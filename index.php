<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
var_dump($bike);

// $bike->setColor("blue");
$bike->setCurrentSpeed(0);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
$bike->dump();


// Car
$car = new Car("white", 5, "Gasoil");
var_dump($car);

// Moving car
echo $car->start();
echo '<br>';
echo $car->forward();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();