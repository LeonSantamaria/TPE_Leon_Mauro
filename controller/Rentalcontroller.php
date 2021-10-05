<?php
require_once "model/Rentalmodel.php";
require_once "view/Rentalview.php";

class RentalController{
    private $model; 
    private $view;

    public function __construct()
    {
        $this->model = new RentalModel;
        $this->view = new RentalView;
    }
    public function ShowHome(){
        $rents = $this->model->GetRental();
        $categoria = $this->model->GetCategorias();
        $this->view->MostrarInicio($rents , $categoria);
    }
    public function ShowDetails($id){
        $model = $this->model->GetById($id);
        $this->view->MostrarDetalles($model);

    }
}