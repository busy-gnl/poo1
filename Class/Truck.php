<?php

namespace Class;

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'gasoline',
    ];

    private int $capacity;
    private int $filling = 0;
    private string $energy;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
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

    public function getFilling(): int
    {
        return $this->filling;
    }

    public function setFilling(int $filling): void
    {
        if ($this->filling < 0) {
            $this->filling = 0;
        } else {
            $this->filling = $filling;
        }
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    // public function setLoadCapacity(int $capacity): void
    // {
    //     if ($this->capacity < 1) {
    //         $this->capacity = 1;
    //     } else {
    //         $this->loadingCapacity = $capacity;
    //     }
    // }

    public function load(): string
    {
        $sentence = "";
        while ($this->capacity > $this->filling) {
            $this->filling++;
        }
        echo $sentence .= "in filling . $this->filling . m3 <br>";
        $sentence = "full";
        return $sentence;
    }

    // public function isFull(): string
    // {
    //     if ($this->filling < $this->capacity) {
    //         return "in filling";
    //     } else {
    //         return "full";
    //     }
    // }
}
