<?php 
require_once "./libs/smarty-3.1.39/libs/Smarty.class.php";
class LoginView {
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }
    function MostrarLogin(){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');
        
        $this->smarty->assign('logueado', false);
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/login.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarRegistro(){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/register.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarInicio(){
        header("Location: ".BASE_URL."home"); 
    }
}