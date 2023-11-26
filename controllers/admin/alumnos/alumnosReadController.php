<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnosReadController{

    public function index(){
        $alumnosModel = new Cliente();
        $alumnos = $alumnosModel->all("alumnos");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos-read.php"; 

    }

    
}


