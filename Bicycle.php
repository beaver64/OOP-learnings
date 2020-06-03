<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
    }
}