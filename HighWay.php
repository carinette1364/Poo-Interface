<?php

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
  
    public function setCurrentVehicles ($vehicles): void
    {
        $this->currentVehicles[] = $vehicles;
    }
  
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    abstract protected function addVehicle(Vehicle $vehicle);
    
  
   
}