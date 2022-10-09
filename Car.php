<?php

require_once 'Vehicle.php';

class Car extends Vehicle

{   
    /*Constante de classe
    - On peut appeler une constante de classe dans la classe, on utilise self::
    - On peut appeler une constante de classe depuis l'extérieur sans que celle-ci 
    soit instanciée, on utilise l'opérateur :
    - On peut appeler dans index.php la constante ALLOWED_ENERGIES sans instancier une voiture par exemple.*/
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /*Propriétes*/
    private string $energy;
    private int $energylevel;
    private string $brand;

    /*Methodes*/
    public function __construct(string $color, int $nbSeats, string $energy, string $brand)
    {
        /* On utilise le constructeur du parent afin de ne pas répéter la même méthode ici
        -> on peut avec le mot parent appeler n'importe quelle méthode d'une classe parent*/
        // $this->color = $color;
        // $this->nbSeats = $nbSeats;
        parent::__construct($color, $nbSeats);
        // $this->energy = $energy;
        $this->setEnergy($energy);
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): Car
    {
        /*On vérifie si l'énergie passée en paramètre de la méthode est bien
        dans le tableau de la constante de classe ALLOWED_ENERGIES 
        - self:: = pour appeler la constante dans la classe, représente la classe (la constante est propre 
        à la classe et non à l'objet)
        - $this = représente l'instance en cours de la classe*/
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}