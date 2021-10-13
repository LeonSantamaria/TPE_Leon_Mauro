<?php
require_once "model/Rentalmodel.php";
require_once "view/Rentalview.php";


class RentalController{
    private $model; 
    private $view;
  

    public function __construct()
    {
        $this->model = new RentalModel;
        $this->view = new RentalView();
       
    }
    public function ShowHome(){
        session_start();
        if (isset($_SESSION['logueado'])&& $_SESSION['logueado']==true) {
            
            $log = $_SESSION['logueado'];
        }else{

            $log = false;
        }
        $rents = $this->model->GetRental();
        $categoria = $this->model->GetCategorias();
        $ciudades = $this->model->GetCategoriasFK();
        $this->view->MostrarInicio($rents , $categoria, $ciudades, $log);
    }
    public function ShowDetails($id){
        $model = $this->model->GetById($id);
        $this->view->MostrarDetalles($model);

    }
    public function ShowCategory($category){
        $model = $this->model->CategoryFilterTipo($category);
        $this->view->MostrarFiltrado($model);
    }
    public function ShowCategoryCiudad($category){
        $model = $this->model->CategoryFilterCiudad($category);
        $this->view->MostrarFiltrado($model);
    }

    public function ShowAdmin(){
        $categorias = $this->model->GetCategoriasFK();
        $this->view->MostrarAdmin($categorias);

    }
    public function insertarRental(){
        $categorias = $this->model->GetCategoriasFK();
        $this->model->insertRental($_POST['titulo'], $_POST['descripcion'], $_POST['contacto'], $_POST['tipo'],$_POST['ciudad']);
        $this->view->MostrarAdmin($categorias);
    }
    public function ShowLogin(){
        $this->view->MostrarLogin();
    }
    public function ShowRegister(){
        $this->view->MostrarRegistro();
    }
    
}