<?php

/*Récupération du fichier de la classe*/
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

/*Instanciation d'un nouvel objet de la classe Bicycle*/
$bmxLisa = new Bicycle('gold', 1);
/*Appel de la méthode forward()*/
echo $bmxLisa->forward();
var_dump($bmxLisa);

var_dump(Car::ALLOWED_ENERGIES);

/*Instanciation d'un nouvel objet de la classe Car*/
$carBart = new Car('black', 4, 'electric', 'VolksWagen');
echo $carBart->setColor('white');
echo $carBart->forward();
var_dump($carBart);

/*Instanciation d'un nouvel objet de la classe Truck*/
$truckHomer = new Truck(100, 'red', 2, 'fuel');
var_dump($truckHomer);
/*Appel de la méthode forward()*/
echo $truckHomer->forward() . ' Homer';
/*Modification du chargement initialement défini à 0*/
echo $truckHomer->setLoad(50) . '<br>';
/*Appel de la méthode isLoading() pour vérifier si le camion est plein ou non*/
echo $truckHomer->isLoading();

/*Instanciation d'un nouvel objet de la classe Truck*/
$truckMarge = new Truck(200, 'pink', 2, 'electric');
var_dump($truckMarge);
echo $truckMarge->forward() . ' Marge';
echo $truckMarge->setLoad(200) . '<br>';
echo $truckMarge->isLoading();








