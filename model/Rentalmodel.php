<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class RentalModel{
    private $db; 
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    
    }
    function GetRental(){
        $query = $this->db->prepare('SELECT * FROM alojamiento');
        $query->execute(); 
        $rent = $query->fetchAll(PDO::FETCH_OBJ);
        return $rent;   
    }
    function GetById($id){
        $query = $this->db->prepare('SELECT * FROM alojamiento Where Id=?');
        $query->execute(array($id)); 
        $rent = $query->fetchAll(PDO::FETCH_OBJ);
        return $rent;   
    }
    function GetCategorias(){
        $query = $this->db->prepare('SELECT DISTINCT Tipo FROM alojamiento');
        $query->execute();
        $genre = $query->fetchAll(PDO::FETCH_OBJ);
        return $genre;
    }
    function CategoryFilter($tipo){
        $query = $this->db->prepare('SELECT * FROM alojamiento Where Tipo=?');
        $query->execute(array($tipo));
        $category = $query->fetchAll(PDO::FETCH_OBJ); 
        return $category; 
    }
    function insertRental($titulo, $descripcion, $contacto, $tipo, $ciudad){
        $sentencia = $this->db->prepare("INSERT INTO alojamiento(titulo, descripcion, contacto, tipo, id_ciudad) VALUES(?, ?, ?, ?,?)");
        $sentencia->execute(array($titulo,$descripcion,$contacto, $tipo , $ciudad));
    }
}

