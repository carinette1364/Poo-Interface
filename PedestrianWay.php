<?php

class PedestrianWay extends Highway
{
    public const NB_LANE = 1;
    public const MAX_SPEED = 10;

    public function __construct()
    {
        $this->nbLane = self::NB_LANE;
        $this->maxSpeed = self::MAX_SPEED;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard ) {
            $this->setCurrentVehicles($vehicle);
            return "Ce véhicule est autorisé.";
        } else {
            
            return "Ce véhicule est interdit.";
        }
    }
        
}