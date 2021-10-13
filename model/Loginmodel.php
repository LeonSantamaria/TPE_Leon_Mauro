<?php

class LoginModel{
    private $db; 
    function __construct(){

        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    
    }
    function insertUsuario($user, $pass){
        $sentencia = $this->db->prepare('INSERT INTO usuarios(Email, Password) VALUES(?, ?)');
        $sentencia->execute([$user, $pass]); 
    }
    function loginVerify($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE Email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user; 
    }
}