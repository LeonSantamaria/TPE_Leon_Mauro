<?php 
require_once "model/Loginmodel.php";
require_once "view/Loginview.php"; 


class LoginController {
    private $model; 
    private $view; 

    

    function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView(); 
        
    }
    public function ShowLogin(){
        $this->view->MostrarLogin();
    }
    public function ShowRegister(){
        $this->view->MostrarRegistro();
    }
    public function login(){
        session_start(); 
        if(isset($_SESSION['logueado']) && $_SESSION['logueado']==true){
           
            
        }

        if(!empty($_POST['user'])&& !empty($_POST['pass'])){
            $userEmail=$_POST['user'];
            $userPassword=$_POST['pass'];
            $email = $this->model->loginVerify($userEmail);

            if($email && password_verify($userPassword,($email->Password))){

                $_SESSION['logueado'] = true; 
                $_SESSION['username'] = $userEmail;
                  
                $this->view->MostrarInicio();
            }else{
                $this->view->MostrarLogin();
                
            }
        }
    }
    public function insertUsuarios(){
        if (!empty($_POST['user'])&& !empty($_POST['pass'])){
            $userPassword = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            $this->model->insertUsuario($_POST['user'] , $userPassword);
            $this->view->MostrarInicio();
            
        }
    }
}
