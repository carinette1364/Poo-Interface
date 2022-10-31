<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface

{   
    
    public function switchOn(): bool
    {
        echo 'OK light, éclairage ON <br>' . PHP_EOL;
        return $this->light = true;
       
    }

    public function switchOff(): bool
    {   
        echo 'NOK light, éclairage OFF <br>' . PHP_EOL;
        return $this->light = false;
      
    }

}