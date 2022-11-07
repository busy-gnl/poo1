<?php
require '../vendor/autoload.php';

use Class\Bicycle;
use Class\Car as Car;
use Class\MotorWay;

$tesla = new Car("red", 5, "electric");
$tesla->setHasParkBrake(true);
$tesla->setCurrentSpeed(0);
$tesla->setEnergyLevel(10);

// var_dump($tesla);

// try {
//     $tesla->start();
// } catch (Exception $e) {
//  echo $e->getMessage();
//     $tesla->setHasParkBrake(false);
//     return $tesla->start();
// }
// var_dump($tesla);

$bike = new Bicycle('blue', 1);
var_dump($bike);
$bike->setCurrentSpeed(11);

var_dump($bike);
$bike->switchOn();
echo var_export($bike->switchOn());
