<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface

{   

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            echo 'OK light, vous roulez assez vite pour recharger la dynamo ! <br>' . PHP_EOL;
            return $this->light = true;
        } else {
            echo 'NOK light, votre dynamo est déchargée ! <br>' . PHP_EOL;
            return $this->light = false;
        }
    }

    public function switchOff(): bool
    {
        echo 'NOK light, votre dynamo est déchargée !';
        return $this->light=false;
    }


}
