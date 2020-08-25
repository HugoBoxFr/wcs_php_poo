<?php

require_once 'Vehicle.php';

abstract class HighWay
{
    /**
     * @var array
    */
    protected $currentVehicles = [];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): int
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): int
    {
        $this->maxSpeed = $maxSpeed;
    }


    abstract public function addVehicule(Vehicle $vehicle): Vehicle;
}