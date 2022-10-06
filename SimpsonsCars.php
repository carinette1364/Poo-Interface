<?php

class SimpsonsCars 
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 10;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        $this->energyLevel--;
        return "Go!";
    }

    public function forward(): string
    {
        $this->currentspeed = 30;
        
        while ($this->currentspeed <=100 || $this->energyLevel <= 0) {
            $this->currentspeed+=5;
            $this->energyLevel--;
            if($this->currentspeed == 100)
            return "Vous êtes arrivé à la limite de 100km/h";
            if($this->energyLevel == 0)
            return "Vous êtes à sec";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels():int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels):void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed):void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor():string
    {
        return $this->color;
    }
    
    public function setColor(string $color):void
    {
        $this->color = $color;
    }

    public function getNbSeats():int
    {
        return $this->nbSeats;
    }
    
    public function setNbSeats(int $nbSeats):void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy():string
    {
        return $this->energy;
    }
    
    public function setEnergy(string $energy):void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }
    
    public function setenergyLevelLevel(int $energyLevel):void
    {
        $this->energyLevel = $energyLevel;
    }


}