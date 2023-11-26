<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class MaestrosReadController{

    public function index(){
        $maestrosModel = new Cliente();
        $maestros = $maestrosModel->all("maestros");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros-read.php";

    }

    
}

