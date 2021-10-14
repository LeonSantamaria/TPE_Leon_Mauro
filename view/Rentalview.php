<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
require_once "view/Loginview.php";

class RentalView{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
        
    }
    function MostrarInicio($rental , $categorias, $ciudades, $logueado, $error = null) {   
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('rental', $rental);
        $this->smarty->assign('ciudades', $ciudades);
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');
        
        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');
        
        $this->smarty->assign('error' , $error);
        $this->smarty->display('template/main.tpl');
        $this->smarty->display('template/footer.tpl');
    }


    function MostrarDetalles($detalles, $logueado){
        $this->smarty->assign('detalles', $detalles);
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/detalles.tpl');
        $this->smarty->display('template/footer.tpl');
    }


    function MostrarFiltrado($tipo, $logueado){ 
        $this->smarty->assign('tipos', $tipo);
        $this->smarty->display('template/head.tpl');
        $this->smarty->assign('base_url', BASE_URL);

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/categorias.tpl');
        $this->smarty->display('template/footer.tpl');
    }


    function MostrarAdmin($categorias, $logueado){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/admin.tpl');
        $this->smarty->display('template/footer.tpl');
    }


    function MostrarLogin($logueado){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/login.tpl');
        $this->smarty->display('template/footer.tpl');
    }


    function MostrarRegistro($logueado){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->display('template/register.tpl');
        $this->smarty->display('template/footer.tpl');
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

    function modificarAlojamiento($alojamiento, $categorias, $logueado){
        $this->smarty->display('template/head.tpl');

        $this->smarty->assign('logueado' , $logueado);
        $this->smarty->display('template/nav.tpl');

        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('alojamiento', $alojamiento);
        $this->smarty->display('template/actualizarAlojamiento.tpl');
        $this->smarty->display('template/footer.tpl');
    }
}