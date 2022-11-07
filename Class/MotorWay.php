<?php

namespace Class;

final class MotorWay extends HighWay
{

    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicles(Vehicle $vehicle): void
    {
        if (!$vehicle instanceof Bicycle || !$vehicle instanceof Skateboard) {
            die('Les skates et les vélos ne peuvent pas circuler sur l\'autoroute');
        }
        $this->currentVehicles[] = $vehicle;
    }
}
