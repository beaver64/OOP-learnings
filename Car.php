<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'];
// Do not modify the rest of the file

}