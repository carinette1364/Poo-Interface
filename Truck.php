<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /*Propriétés*/
    private string $energy;
    private int $storageCapacity;
    private int $load = 0;

    /*Méthodes*/
    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function isLoading(): string
    {
        if ($this->load < $this->storageCapacity) {
            return 'Le chargement actuel est de : ' . $this->load . ' et votre capacité est de : ' . $this->storageCapacity . 
            ', the truck is in filling';
        }else{
            return 'La capacité maximale de chargement est de : ' . $this->storageCapacity . ', et votre chargement est de : ' 
            . $this->load . ' , the truck is full';
        }
        
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity($storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoad(): string
    {
        return $this->load;
    }

    public function setLoad($load): void
    {
        $this->load = $load;
    }
        
    }

    
