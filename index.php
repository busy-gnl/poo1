<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;

$tesla = new Car("red", 5, "electric");
$tesla->setCurrentSpeed(0);

echo $tesla->getCurrentSpeed();
echo $tesla->getEnergyLevel();
$tesla->start();
echo $tesla->start();
echo $tesla->getCurrentSpeed();
echo $tesla->getEnergy();
