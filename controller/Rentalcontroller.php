<?php
require_once "model/Rentalmodel.php";
require_once "view/Rentalview.php";
require_once "Helpers/AuthHelper.php";
require_once "model/CityModel.php"; 


class RentalController{
    private $model; 
    private $view;
    private $modelcity; 
    private $authHelper;
  

    function __construct()
    {
        $this->model = new RentalModel();
        $this->view = new RentalView();
        $this->modelcity = new CityModel();
        $this->authHelper = new AuthHelper();
       
    }

    function ShowHome(){
        $rents = $this->model->GetRental();
        $categoria = $this->model->GetCategorias();
        $ciudades = $this->modelcity->GetCategoriasFK();
        $props = $this->authHelper->getProps();
        
        $this->view->MostrarInicio($rents , $categoria, $ciudades, $this->authHelper->loggedIn(), $props);
    }

    function ShowDetails($id){
        $model = $this->model->GetById($id);
        $this->view->MostrarDetalles($model, $this->authHelper->loggedIn());
    }

    function ShowCategory($category){
        $model = $this->model->CategoryFilterTipo($category);
        $this->view->MostrarFiltrado($model, $this->authHelper->loggedIn());
    }

    function ShowCategoryCiudad($category){
        $model = $this->model->CategoryFilterCiudad($category);
        $this->view->MostrarFiltrado($model, $this->authHelper->loggedIn());
    }

    public function ShowAdmin(){
        $categorias = $this->modelcity->GetCategoriasFK();
        $this->view->MostrarAdmin($categorias, $this->authHelper->loggedIn());
    }

    public function insertarRental(){
        
        $this->model->insertRental($_POST['titulo'], $_POST['descripcion'], $_POST['contacto'], $_POST['tipo'],$_POST['ciudad']);
        header("Location: ".BASE_URL."home");
    }

    function ShowLogin(){
        $this->view->MostrarLogin($this->authHelper->loggedIn());
    }

    function eliminarAlojamiento($id){
        $this->authHelper->checkLoggedIn();
        $this->model->eliminarAlojamiento($id);
        header("Location: ".BASE_URL."home");
    }

    function eliminarCategoria($id){
        $alojamientos = $this->model->CategoryFilterCiudad($id);

        if(sizeof($alojamientos) == 0) {
            $this->modelcity->eliminarCategoria($id);
            header("Location: ".BASE_URL."home");
        } else {
            $error = 'Error, no se puede eliminar la categoria';
            $rents = $this->model->GetRental();
            $categoria = $this->model->GetCategorias();
            $ciudades = $this->modelcity->GetCategoriasFK();
            $this->view->MostrarInicio($rents, $categoria, $ciudades, $this->authHelper->loggedIn(), $error,);
        }   
    }

    

    function modificarAlojamiento($id){
        $alojamiento = $this->model->getAlojamiento($id);
        if ($alojamiento) { //si es distinto de null
            $this->authHelper->checkLoggedIn();
            $this->view->modificarAlojamiento($alojamiento, $this->modelcity->GetCategoriasFK(), true); //logueado es true xq ya estoy iniciado sesion para poder hacer eso
        }   
    }

    function actualizarAlojamiento(){
        if (isset($_POST['titulo'])
            && isset($_POST['descripcion']) 
            && isset($_POST['contacto'])
            && isset($_POST['tipo'])
            && isset($_POST['ciudad']) ) {
                $this->model->actualizarAlojamiento($_POST['titulo'], $_POST['descripcion'], $_POST['contacto'], $_POST['tipo'], $_POST['ciudad'], $_POST['id']);
                header("Location: ".BASE_URL."home"); 
            }
    }
}