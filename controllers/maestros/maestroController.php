<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class MaestroController{

    public function index(){
        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/maestro.dashboard.php";
    }

}
