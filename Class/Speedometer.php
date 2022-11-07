<?php

class Speedometer
{
    public const DISTANCE_CONVERSION = 1.609;

    public function convertKmToMiles(int $nbMiles): float
    {
        return $nbMiles / self::DISTANCE_CONVERSION;
    }

    public function convertMilesToKm(int $nbKm): float
    {
        return $nbKm * self::DISTANCE_CONVERSION;
    }
}
