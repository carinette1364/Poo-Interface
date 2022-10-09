<?php

class Bicycle

{

    /*Propriétés (ou Attributs) et Valeurs
- Si propriétes non typées, alors elles seront à NULL
- Valeurs pouvant être définies par défaut

Visibilité ou portée des variables (accès):
- public = accessible au sein de la classe avec $this->nom propriété et à l'extérieur de la classe
- private = accessible à l'intérieur de la classe mais pas à l'extérieur de celle-ci
--> Pour y accéder de l'extérieur on va utiliser les fonctions get et set.
        - la fonction get (obtenir) peut accéder à la propriété avec le $this car même si c'est privé on peut y accéder depuis la classe
        -la fonction set (définir) permet d'avoir la possibilité de changer, elle a pour permettre la propriété que l'on veut redéfinir
- protected = aussi strict que private mais on peut accéder à cette propriété depuis des classes qui héritent de celle-ci
*/

    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

/*Méthode magique -> Le constructeur: __construct
- Il permet d'initialiser tout ou partie des propriétés de l'objet*/

    public function __construct(string $color)
{
    $this->color = $color;
}

    /*Méthodes
- Pas de echo, comme les functions les méthodes ont un return
- $this représente l'objet lui-même, le nom que l'on a donné à l'instance
- $this fait référence à l'objet courant*/

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=5;
            $sentence .= "Brake !!!";
        }
        $sentence .= "<br>I'm stopped !";
        return $sentence;
    }

    // public function dump()
    // {
    //     var_dump($this);
    // }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
       
    }

    public function getNbseats(): int
    {
        return $this->nbseats;
    }

    public function setNbseats(int $nbseats): void
    {
        $this->nbseats = $nbseats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
