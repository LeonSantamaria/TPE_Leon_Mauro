<?php
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
}

