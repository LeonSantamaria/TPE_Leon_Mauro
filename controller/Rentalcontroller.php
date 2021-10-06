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
    public function ShowCategory($category){
        $model = $this->model->CategoryFilter($category);
        $this->view->MostrarFiltrado($model);
    }
    public function ShowAdmin(){
        $this->view->MostrarAdmin();

    }
    public function insertarRental(){
        $this->model->insertRental($_POST['titulo'], $_POST['descripcion'], $_POST['contacto'], $_POST['tipo'],$_POST['id_ciudad']);
        $this->view->MostrarAdmin();
    }
}