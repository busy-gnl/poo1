<?php

namespace Class;

use Class\Vehicle;
use Class\LightableInterface;

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn(): bool
    {
        return $this->currentSpeed >= 10 ? true : false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
