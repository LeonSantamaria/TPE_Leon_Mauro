<?php
require_once "./model/Rentalmodel.php";
require_once "./view/Apiview.php";



class ApiRentalController{
    protected $model; 
    protected $view;
    private $data; 

  

    function __construct()
    {
        $this->model = new RentalModel();
        $this->view = new Apiview();
        $this->data = file_get_contents("php://input");
        
    }
    function getData(){
        return json_encode($this->data); 
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
   /*function addRental($params = [null]){
        $body = $this->getData();
        $id = $this->model->save($body->titulo, $body->descripcion, $body->contacto, $body->tipo, $body->ciudad);
        $rental = $this->model->get($id);
        if ($rental){
            $this->view->response($tarea , 200);
        }
        else
            $this->view->response("La tarea no fue creada", 500);
    }*/
}