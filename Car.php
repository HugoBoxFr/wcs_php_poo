<?php

class Car 
{
    /**
     * @var integer
     */
    private $nbOfWheels = 4;

    /**
     * @var string
     */
    private $currentSpeed = 50;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;


    public function __construct($color, $nbSeats, $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start() {
        return 'Start';
    }
    public function forward() {
        $this->currentSpeed = 50;
        return 'Go !';
    }

    public function brake() {
        $sentence = "";

        while ($this->currentSpeed > 0) {
        $this->currentSpeed -= 10;
        $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * @return integer
     */
    public function getNbOfWheels(): int
    {
        return $this->nbOfWheels;
    }

    /**
     * @return integer
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return integer
     */
    public function getNbOfSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return integer
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}