<?php

require_once 'Vehicle.php';
include('LightableInterface.php');

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(): boolean
    {
        if ($hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start() 
    {
        if ($this->hasParkBrake) {
            throw new Exception("ParkBrake is activ !");
        }
    }

    public function swtichOn(): bool
    {
        return true;
    }

    public function swtichOff(): bool
    {
        return false;
    }
}