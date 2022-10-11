<?php

/*Récupération du fichier de la classe*/
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Truck.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();
// echo $motorWay::NB_LANE;
// echo $motorWay->getNbLane();

// var_dump($motorWay);
// echo MotorWay::NB_LANE . '<br>' . PHP_EOL;
// echo MotorWay::MAX_SPEED . '<br>' . PHP_EOL;

//Instanciation de nouveaux objets véhicules
$carBart = new Car('blue',4);
$truckLisa = new Truck('red', 3);
$bikeMaggie = new Bicycle('green', 1);
$skateboardBart = new Skateboard('black', 1);


//Ajout de véhicules avec la méthode addVehicule sur différents types de chemins
echo $residentialWay->addVehicle($carBart) . '<br>' . PHP_EOL;
echo $residentialWay->addVehicle($bikeMaggie) . '<br>' . PHP_EOL;
echo $motorWay->addVehicle($bikeMaggie) . '<br>' . PHP_EOL;
echo $motorWay->addVehicle($carBart) . '<br>' . PHP_EOL;
echo $pedestrianWay->addVehicle($bikeMaggie) . '<br>' . PHP_EOL;
echo $pedestrianWay->addVehicle($carBart) . '<br>' . PHP_EOL;
echo $pedestrianWay->addVehicle($skateboardBart) . '<br>' . PHP_EOL;

//Récupération du tableau d'objets getCurrentVehicles
$wayVehicles = $pedestrianWay->getCurrentVehicles();
//Exemple pour récupérer les couleurs des vehicules présents dans ce type de chemin
foreach ($wayVehicles as $item) {

        echo $item->getColor() . '<br>' . PHP_EOL;
}


























