<?php

namespace Class;

use Class\Vehicle;
use Exception;
use Class\LightableInterface;

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Impossible d'avancer avec le frein à main");
        }
        if ($this->currentSpeed === 0 && $this->energyLevel > 0) {
            while ($this->currentSpeed < 15) {
                $this->currentSpeed += 5;
                $this->energyLevel--;
                echo "<br>Let's take a ride !<br>";
                echo "vitesse : " . $this->currentSpeed . " km/h" . "<br>";
                echo "il reste " . $this->energyLevel . " litres";
            }
        }
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

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }


    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
