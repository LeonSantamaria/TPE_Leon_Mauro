<?php
require_once "./model/Rentalmodel.php";
require_once "./view/Apiview.php";



class ApiRentalController{
    private $model; 
    private $view;

  

    function __construct()
    {
        $this->model = new RentalModel();
        $this->view = new Apiview();  
    }
    function ObtenerRentals(){
        $alojamientos = $this->model->Getrental();
        return $this->view->response($alojamientos, 200);
    }

    function ObtenerRental($params = []){
        $idRental = $params[":ID"]; 
        $alojamiento = $this->model->GetById($idRental);
        return $this->view->response($alojamiento , 200);
    }
    function DeleteRental($params = []){
        $idRental = $params[":ID"]; 
        $rental = $this->model->eliminarAlojamiento($idRental);
        return $this->view->response($rental , 200);
    }
}