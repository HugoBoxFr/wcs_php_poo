<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bike.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);
var_dump($car->swtichOn());
var_dump($car->swtichOff());


$truck = new Truck(5, 'grey', 2, 'fuel');
echo $truck->isFilling();
var_dump($truck);

try {
    $car->start();
} catch(Exception $e) {
    $car->setParkBrake();
} finally {
    echo "Let's go !!!";
}

$bike = new Bike('blue', 1);
$bike->setCurrentSpeed(5);

var_dump($bike->switchOn());
