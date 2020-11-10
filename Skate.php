<?php

require_once 'Bicycle.php';

final class Skate extends Bicycle

{

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }


}