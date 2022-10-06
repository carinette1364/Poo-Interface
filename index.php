<?php
require 'Bicycle.php';
require 'SimpsonsCars.php';

// $bike = new Bicycle();
// $bike->color = 'blue';
// $bike->currentSpeed = 0;
// var_dump($bike);
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . 'km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . 'km/h' . '<br>';
// echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
// $rockrider = new Bicycle();
// $rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
// $tornado = new Bicycle();
// $tornado->color = 'black';

// $tornado->forward();

$carMarge = new SimpsonsCars('blue', 4, 'diesel');
$carBart = new SimpsonsCars('red', 6, 'electric');
var_dump($carMarge, $carBart);

echo $carMarge->start() . '<br>';
echo 'Mon nouveau niveau d\'energy est : ' . $carMarge->getEnergyLevel() .  '<br>';
echo $carMarge->forward() . '<br>';
echo 'Mon nouveau niveau d\'energy est : ' . $carMarge->getEnergyLevel() . '<br>';
echo $carMarge->brake() . '<br>';





