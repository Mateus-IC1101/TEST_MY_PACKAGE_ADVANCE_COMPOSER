<?php

require_once 'vendor/autoload.php';

use Mateus\TestPhpunitPhp\controllers\ParkingController;
use Mateus\TestPhpunitPhp\models\Car;

$controller = new ParkingController();
$car = new Car('Gol', 'OVY-588');
$controller->addCar($car);

var_dump($controller->countCars());