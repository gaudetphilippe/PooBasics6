<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addVehicle($vehicles)
    {
        if ($vehicles instanceof Bicycle || $vehicles instanceof Skate)

        {
            $this->currentVehicles[] = $vehicles;
        }
    }
}
