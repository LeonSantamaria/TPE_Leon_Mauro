<?php
require_once "model/CityModel.php";
require_once "view/CityView.php"; 
require_once "Helpers/AuthHelper.php"; 
class CityController{
    private $model; 
    private $view; 
    private $authHelper;
    
    function __construct()
    {
        $this->model = new CityModel();
        $this->view = new CityView();
        $this->authHelper = new AuthHelper();
    }
    function agregarCiudad(){
        $this->authHelper->checkLoggedIn();
        if (isset($_POST['ciudad']) && !empty($_POST['ciudad'])){
            $this->modelcity->agregarCiudad($_POST['ciudad']);
            header("Location: ".BASE_URL."home");
        }
    }
    function showFormCity(){
        $this->view->showFormCity($this->authHelper->loggedIn());
    }
    function modificarCiudad($id){
        $this->authHelper->checkLoggedIn();
        $ciudad = $this->model->getCategoria($id);
        $this->view->modificarCiudad($ciudad, true);
    }
    function actualizarCiudad(){
        $id = $_POST['id'];
        $ciudad = $_POST['ciudad'];
        $this->model->actualizarCiudad($ciudad, $id);
        header("Location: ".BASE_URL."home"); 
    }
    

}