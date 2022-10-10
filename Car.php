<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private int $energyLevel;

    public function __construct(private string $color, private int $nbSeats, private string $energy)
    {
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;

            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";

        return $sentence;
    }

    public function start(): string
    {
        if ($this->currentSpeed = 0) {
            $this->brake();

            return "Let's take a ride !";
        }
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return "This car is $this->color";
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return "This car drinks $this->energy";
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
