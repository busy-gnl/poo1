<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once "Truck.php";


// $bike = new Bicycle("blue", 1);
// echo $bike->forward();
// var_dump($bike);

// $tesla = new Car("red", 5, "electric");
// echo $tesla->forward();
// var_dump($tesla);

// var_dump(Car::ALLOWED_ENERGIES);

// $tesla->setCurrentSpeed(0);
// echo $tesla->getCurrentSpeed();
// echo $tesla->getEnergyLevel();
// $tesla->start();
// echo $tesla->start();
// echo $tesla->getCurrentSpeed();
// echo $tesla->getEnergy();

$iveco = new Truck(5, "blue", 3, "fuel");

echo $iveco->forward();

echo $iveco->brake();



echo $iveco->load();
