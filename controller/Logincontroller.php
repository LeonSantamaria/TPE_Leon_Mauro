<?php 
require_once "model/Loginmodel.php";
require_once "view/Loginview.php";
require_once "Helpers/AuthHelper.php"; 


class LoginController {
    private $model; 
    private $view; 
    private $authHelper;
    

    function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView(); 
        $this->authHelper = new AuthHelper();
        
    }
    public function ShowLogin(){
        $this->view->MostrarLogin();
    }
   
    public function login(){
       
        if(!empty($_POST['user'])&& !empty($_POST['pass'])){
            $userEmail=$_POST['user'];
            $userPassword=$_POST['pass'];
            $email = $this->model->loginVerify($userEmail);

            if($email && password_verify($userPassword,($email->Password))){
                session_start();
                $_SESSION['user'] = $userEmail; 
                                  
                $this->view->MostrarInicio();
            }else{
                $this->view->MostrarLogin();   
            }
        }
    }

     function logout(){
        session_start();
        session_destroy();
        $this->view->MostrarLogin();
    }
}
