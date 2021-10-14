<?php

require_once './view/Loginview.php';

class AuthHelper{

    function checkLoggedIn(){ //chequea si esta logueado
        session_start();
        if(!isset($_SESSION['user'])) {
            header("Location: ".BASE_URL);
        }
    }

    function loggedIn(){ 
        session_start();
        return isset($_SESSION['user']);
    }
}