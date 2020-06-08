<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $chargeCapacity;

    /**
     * @var int
     */
    private
    $charge = 0;

    public function __construct(int $chargeCapacity, $color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->chargeCapacity = $chargeCapacity;
    }

    /**
     *
     * @return string
     */
    public function getEnergy(): string
    {
        if (in_array($this->energy, self::ALLOWED_ENERGIES))
        {
            $this->energy = $getEnergy;
        }
        return $this;
    }

        public function fillingGood($chargeCapacity): string
    {
        if ($this->charge >= $chargeCapacity) {
            return 'full';
        } else {
            return 'in filling';
        }
    }


}
