<?php
require '../vendor/autoload.php';

use Class\Bicycle;
use Class\Car as Car;
use Class\MotorWay;

$tesla = new Car("red", 5, "electric");
$tesla->setHasParkBrake(true);
$tesla->setCurrentSpeed(0);
$tesla->setEnergyLevel(10);

$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(11);
var_dump($bike);

$bike->switchOn();
echo var_export($bike->switchOn()) . "<br>";

$tesla->switchOn();
echo var_export($tesla->switchOff());
