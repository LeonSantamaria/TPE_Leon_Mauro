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
        $this->view->MostrarLogin($_SESSION['rol']);
    }
   
    public function login(){
       
        if(!empty($_POST['user'])&& !empty($_POST['pass'])){
            $userEmail=$_POST['user'];
            $userPassword=$_POST['pass'];

            $user = $this->model->loginVerify($userEmail);
            
            if($user && password_verify($userPassword,($user->Password))){
                session_start();
                $_SESSION['user'] = $userEmail; 
            
                $this->view->MostrarInicio();
            }else{
                $this->view->MostrarLogin();   
            }
        }
       
    }
    
    function ShowRegister(){
        
        $this->view->MostrarRegistro($this->authHelper->loggedIn());
        
    }
    function register(){
        if (isset($_POST['usuario']) && ($_POST['email']) && ($_POST['password'])) {
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            
            
            $this->model->insertUsuario($_POST['usuario'], $_POST['email'], $userPassword);
            $username = $_POST['usuario'];
            session_start();
            $_SESSION['user'] = $username;
            header("Location: ".BASE_URL."home");

        }
        
        
    }

     function logout(){
        session_start();
        session_destroy();
        $this->view->MostrarLogin();
    }
}
