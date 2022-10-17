<?php
require '../vendor/autoload.php';

use Class\Car as Car;
use Class\Truck as Truck;
use Class\Bicycle as Bicycle;
use Class\Skateboard as Skateboard;
use Class\MotorWay as MotorWay;
use Class\PedestrianWay as PedestrianWay;
use Class\ResidentialWay as ResidentialWay;



$bike = new Bicycle("blue", 1);
var_dump($bike);

$tesla = new Car("red", 5, "electric");
var_dump($tesla);

$iveco = new Truck(5, "blue", 3, "fuel");
var_dump($iveco);

$paradiseRoad = new MotorWay();

$delandineStreet = new ResidentialWay();

$wallStreet = new PedestrianWay();

$paradiseRoad->addVehicles($tesla);
$paradiseRoad->addVehicles($iveco);
var_dump($paradiseRoad);

$wallStreet->addVehicles($bike);
var_dump($wallStreet);
