<?php

require_once 'libs/Router.php';
require_once 'controller/ApiRentalController.php';

$router = new Router(); 

$router->addRoute('rental', 'GET', 'ApiRentalController', 'ObtenerRentals');
$router->addRoute('rental/:ID', 'GET', 'ApiRentalController', 'ObtenerRental');
$router->addRoute('rental/:ID', 'DELETE', 'ApiRentalController', 'DeleteRental');
$router->addRoute('rental', 'POST', 'ApiRentalController', 'asd');
$router->addRoute('rental/:ID', 'PUT', 'ApiRentalController', 'asd');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);