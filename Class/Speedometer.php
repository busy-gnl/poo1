<?php

class Speedometer
{
    public const DISTANCE_CONVERSION = 1.609;

    public function convertKmToMiles(int $nbMiles)
    {
        return $nbMiles / self::DISTANCE_CONVERSION;
    }

    public function convertMilesToKm(int $nbMiles)
    {
        return $nbMiles * self::DISTANCE_CONVERSION;
    }
}
