<?php
require_once 'Bycicle.php';
require_once 'car.php';
require_once 'truck.php';
$truck = new truck("white",5,"fuel");
$car = new Car("white",5,"fuel");
$bike = new Bycicle("rouge", 1);

$truck->setcontenant(10);
echo $truck->isfull();
$bike->setColor("blue");
$bike->setCurrentSpeed(0);

echo $car->forward();
echo '<br> Vitesse de la voiture:'. $car->getCurrentSpeed().' km/h'.'<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture:'. $car->getCurrentSpeed().' km/h'.'<br>';
echo $car->brake();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo $truck->forward();
echo '<br> Vitesse du camion:'. $truck->getCurrentSpeed().' km/h'.'<br>';
echo $truck->brake();
echo '<br> Vitesse du camion:'. $truck->getCurrentSpeed().' km/h'.'<br>';
echo $truck->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bycicle("yellow",1);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bycicle("blue",1);

require_once  'Bycicle.php';

$bicycle = new Bycicle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

