<?php

namespace Class;

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($vehicles): void
    {
        $this->currentVehicles = $vehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane($lanes): void
    {
        $this->nbLane = $lanes;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($speed): void
    {
        $this->maxSpeed = $speed;
    }

    abstract public function addVehicles(Vehicle $vehicle);
}
