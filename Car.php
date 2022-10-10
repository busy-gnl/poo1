<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        // if ($this->currentSpeed = 0) {
        //     $this->forward();
        // }
        if ($this->currentSpeed === 0 && $this->energyLevel > 0) {
            while ($this->currentSpeed < 15) {
                $this->currentSpeed += 5;
            }
        }

        return "<br>Let's take a ride !<br>";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
