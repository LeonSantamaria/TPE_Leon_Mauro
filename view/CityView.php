<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class CityView{
    private $smarty;
    
    function __construct()
    {
        $this->smarty = new Smarty();
    
    }
    function showFormCity($logueado){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/showFormCity.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function modificarCiudad($ciudad, $logueado ){
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->assign('ciudad', $ciudad);
        $this->smarty->display('template/actualizarCiudad.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    
}