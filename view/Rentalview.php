<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class RentalView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function MostrarInicio($rental , $categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('rental', $rental);
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

}