<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class MaestrosReadController{

    public function index(){
        $maestrosModel = new Cliente();
        $maestros = $maestrosModel->all("SELECT * FROM usuarios WHERE permiso = 'maestro';");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros-read.php";

    }


    public function agregarMaestro(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros_create.php";

    }

    
}

