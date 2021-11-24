<?php

class LoginModel{
    private $db; 
    function __construct(){

        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    
    }
    function insertUsuario($user, $email, $pass){
        $sentencia = $this->db->prepare('INSERT INTO usuarios(usuario ,Email, Password, rol) VALUES(?, ?, ?, "usuario")');
        $sentencia->execute(array($user, $email, $pass)); 
    }


    function loginVerify($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE Email = ?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user; 
    }
    
}