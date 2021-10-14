<?php
require_once "controller/Rentalcontroller.php";
require_once "controller/Logincontroller.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}
$rentalController = new RentalController();
$loginController = new LoginController(); 
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':  
        $rentalController->ShowHome();
        break;
    case 'ShowDetails':
        $rentalController->ShowDetails($params[1]); 
        break;
    case 'login':
        $loginController->login();
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
    case 'ShowLogin':
        $rentalController->ShowLogin(); 
        break;
    case 'eliminarAlojamiento':
        $rentalController->eliminarAlojamiento($params[1]);
        break;
    case 'logout':
        $loginController->logout();
    case 'eliminarCategoria':
        $rentalController->eliminarCategoria($params[1]);
        break;
    case 'agregarCiudad':
        $rentalController->agregarCiudad();
        break;
    case 'showFormCity':
        $rentalController->showFormCity();
        break;
    case 'modificarCiudad':
        $rentalController->modificarCiudad($params[1]);
        break;
    case 'actualizarCiudad':
        $rentalController->actualizarCiudad();
        break;
    case 'modificarAlojamiento':
        $rentalController->modificarAlojamiento($params[1]);
        break;
    case 'actualizarAlojamiento':
        $rentalController->actualizarAlojamiento();
        break;
    default:
      "Problemas en la redireccion";
        break;
}
?>