<?php

require_once 'Bicycle.php';
require_once  'Skate.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometer.php';

$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(10);
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
// Moving bike
echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$car1 = new Car('blue','2','Electric');
$car2 = new Car('black','4', 'Diesel');

echo $car2->forward();
echo '<br> Car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';

echo $car2->forward();
echo '<br> Car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Car runs on \'' . $car2->getEnergy();

$Truck1 = new Truck(8000, 'blue', 4, 'fuel');

$Truck2 = new Truck(8000, 'red', 6, 'electric');

echo $Truck1->forward();
$Truck1->setCurrentSpeed(50);
echo '<br> The truck is driving : ' . $Truck1->getcurrentSpeed() . ' km/h' . '<br>';

echo $Truck1->brake();
echo '<br> Truck speed : ' . $Truck1->getcurrentSpeed() . ' km/h' . '<br>';
echo $Truck1->brake();

$Truck1->setLoading(5000);
$Truck1->getLoading();


echo '<br> The loading of the blue truck is ' . $Truck1->loading . ' kg while its maximum capacity is '. $Truck1->storageCapacity . ' kg.' . '<br>';
echo $Truck1->isFullOrNot();

$Truck2->setLoading(8000);
$Truck2->getLoading();

echo '<br> The loading of the red truck is ' . $Truck2->loading . ' kg while its maximum capacity is '. $Truck2->storageCapacity . ' kg.' . '<br>';
echo $Truck2->isFullOrNot();

$skate = new Skate('black', 0);

echo '<pre>';
$highWay = new MotorWay();
$highWay->addVehicle($Truck1);
$highWay->addVehicle($bike);
var_dump($highWay);

$cityRoad = new ResidentialWay();
$cityRoad->addVehicle($car1);
$cityRoad->addVehicle($bike);
var_dump($cityRoad);

$walkingRoad = new PedestrianWay();
$walkingRoad->addVehicle($bike);
$walkingRoad->addVehicle($skate);
$walkingRoad->addVehicle($Truck1);
var_dump($walkingRoad);

$car1->setParkBrake(true);
$car1->start();
echo '<pre>';
$car2->setParkBrake(false);
$car2->start();

echo '<pre>';
var_dump($bike->switchOn());
var_dump($car1->switchOn());
$bike->setCurrentSpeed(11);
var_dump($bike->switchOn());


echo Speedometer::convertKmToMiles(25);
echo PHP_EOL;
echo Speedometer::convertMilesToKm(25);
