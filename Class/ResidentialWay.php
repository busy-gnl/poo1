<?php

namespace Class;

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }
    public function addVehicles(Vehicle $vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }
}
