<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    
    public function addVehicule(Vehicle $vehicle): ResidentialWay
    {
    	if (isset($vehicle)) {
		    array_push($this->getCurrentVehicles(), $vehicle);
        }
        return $this;
    }
}