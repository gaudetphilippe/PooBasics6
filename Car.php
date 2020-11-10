<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface


{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var bool
     */
    private $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this-> energy = $energy;

    }
    public function start()
    {
        try {
            if ($this->hasParkBrake === True) {
                throw new Exception("the handbrake is on Homer !!!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->setParkBrake(False);
        } finally {
            echo '<br>' ."Ma voiture roule comme un donut";
        }
    }
    public function setParkBrake($hasParkBrake): bool
    {
        return $this->hasParkBrake = $hasParkBrake;
    }
    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }


}