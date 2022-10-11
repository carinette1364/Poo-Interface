<?php

final class MotorWay extends HighWay
{
    public const NB_LANE = 4;
    public const MAX_SPEED = 130;

    public function __construct()
    {
        $this->nbLane = self::NB_LANE;
        $this->maxSpeed = self::MAX_SPEED;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard ) {
            return "Ce véhicule est interdit";
        } else {
            $this->setCurrentVehicles($vehicle);
            return "Ce véhicule est autorisé";
        }
    }
           

}