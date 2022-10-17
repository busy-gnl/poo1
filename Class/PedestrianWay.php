<?php

namespace Class;

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicles(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] =  $vehicle;
        }
    }
}
