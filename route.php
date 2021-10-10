<?php
require_once "controller/Rentalcontroller.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}
$rentalController = new RentalController();
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':  
        $rentalController->ShowHome();
        break;
    case 'ShowDetails':
        $rentalController->ShowDetails($params[1]); 
        break;
    case 'ShowCategory':
        $rentalController->ShowCategory($params[1]); 
        break;
    case 'ShowAdmin':
        $rentalController->ShowAdmin(); 
        break;
    case 'insertarRental':
        $rentalController->insertarRental(); 
        break;

    case 'ShowCategoryCiudad':
        $rentalController->ShowCategoryCiudad($params[1]); 
        break;
    default:
      
        break;
}
?>