<?php
require '../vendor/autoload.php';

use Class\Car as Car;

$tesla = new Car("red", 5, "electric");
$tesla->setHasParkBrake(true);

$tesla->setCurrentSpeed(0);
$tesla->setEnergyLevel(10);

var_dump($tesla);

try {
    $tesla->start();
} catch (Exception $e) {
    $tesla->setHasParkBrake(false);
    return $tesla->start();
}
var_dump($tesla);
