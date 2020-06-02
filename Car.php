<?php
class Car
{
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels = 4;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->EnergyLevel;
    }
    /**
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }

    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function start(bool $start): void
    {
        if ($start === false)
        {
            $start === true;
        }
    }
    public function getNbWheels(int $nbWheels): int
    {
        return $this->nbWheels;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}