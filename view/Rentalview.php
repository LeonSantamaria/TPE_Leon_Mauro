<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class RentalView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function MostrarInicio($rental){
        $this->smarty->assign('rental', $rental);
        $this->smarty->display('template/for.tpl');
    }

}