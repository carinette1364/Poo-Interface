<?php

class ResidentialWay extends Highway
{
    public const NB_LANE = 2;
    public const MAX_SPEED = 50;

    public function __construct()
    {
        $this->nbLane = self::NB_LANE;
        $this->maxSpeed = self::MAX_SPEED;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
        return "Ce véhicule est autorisé.";
        
    }
        
}