<?php

class Car

{
    /*Propriétes*/
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energylevel;

    /*Methodes*/

    public function __construct(string $color, int $nbSeats,string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function forward(): string
    {
        if($this->currentSpeed > 60){
            $this->energyLevel-=10;
            return 'Ralentissez vous consommez trop ! Votre niveau est de : ' . $this->getEnergyLevel() .  '<br>';
        }
      
        // $this->currentSpeed = 30;
        // return 'ça roule !<br>';
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=10;
            $sentence .= "ça freine !!!<br>";
        }
        $sentence .= "<br>Arrêt de votre véhicule !";
        return $sentence;
    }

    public function start(): string
    {
        if($this->energyLevel == 0) {
            return '<br>Vous ne pouvez pas démarrer ! vous êtes à sec, votre niveau est de : ' . $this->getEnergyLevel() . ' litres<br>';
        }
        if($this->energyLevel <= 20) {
            return '<br>Vous n\'irez pas loin, vous êtes presque à sec, votre niveau est de : ' . $this->getEnergyLevel() . ' litres<br>';
        }
        if($this->energyLevel > 20) { 
            return '<br>Bonne route ! Votre niveau est de :  ' . $this->getEnergyLevel() . ' litres<br>';
        }

    }

}