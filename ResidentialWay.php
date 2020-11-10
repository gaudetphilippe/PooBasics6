<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle($vehicles)
    {
        if ($vehicles instanceof Car || $vehicles instanceof Bicycle || $vehicles instanceof Truck)
        {
            $this->currentVehicles[] = $vehicles;
        }
    }
}
