<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    
    public function addVehicule(Vehicle $vehicle): PedestrianWay
    {
        if (isset($vehicle)) {
            if ( ($vehicle instanceof Bike) || ($vehicle instanceof Skateboard) ) {
                array_push($this->getCurrentVehicles(), $vehicle);
            }
        }
        return $this;
    }
    
}