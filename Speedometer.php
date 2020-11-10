<?php


class Speedometer
{
    const CONVERSION = 0.621;

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::CONVERSION;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return $miles / self::CONVERSION;
    }
}