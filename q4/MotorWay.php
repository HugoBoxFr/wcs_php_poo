<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule(Vehicle $vehicle): MotorWay
    {
        if (isset($vehicle)) {
            if ($vehicle instanceof Car) {
                array_push($this->getCurrentVehicles(), $vehicle);
            }
        }
        return $this;
    }
}