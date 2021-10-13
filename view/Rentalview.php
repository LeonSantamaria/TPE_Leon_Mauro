<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
require_once "view/Loginview.php";
class RentalView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        
    }
    function MostrarInicio($rental , $categorias, $ciudades, $logueado){
        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('rental', $rental);
        $this->smarty->assign('ciudades', $ciudades);
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/main.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarDetalles($detalles){
        $this->smarty->assign('detalles', $detalles);
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/detalles.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarFiltrado($tipo){
        
        $this->smarty->assign('tipos', $tipo);
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/categorias.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarAdmin($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/admin.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarLogin(){
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/login.tpl');
        $this->smarty->display('template/footer.tpl');
    }
    function MostrarRegistro(){
        $this->smarty->display('template/head.tpl');
        $this->smarty->display('template/nav.tpl');
        $this->smarty->display('template/register.tpl');
        $this->smarty->display('template/footer.tpl');
    }

}