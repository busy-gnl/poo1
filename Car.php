<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private int $energyLevel = 1;

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

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
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
        return "<br>This car drinks $this->energy <br>";
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
