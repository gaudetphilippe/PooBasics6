<?php
require_once 'HighWay.php';


final class MotorWay extends HighWay
{

    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle($vehicles)
    {
        if ($vehicles instanceof Car || $vehicles instanceof Truck) {
            $this->currentVehicles[] = $vehicles;
        }
    }
}