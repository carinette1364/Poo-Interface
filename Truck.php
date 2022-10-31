<?php

class Truck extends Vehicle implements LightableInterface

{   
    
    public function switchOn(): bool
    {
        echo 'OK light, éclairage ON';
        return $this->light = true;
    }

    public function switchOff(): bool
    {
        echo 'NOK light, éclairage OFF';
        return false;
    }

}

    
