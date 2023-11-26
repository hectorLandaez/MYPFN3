<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnosReadController{

    public function index(){
        $alumnosModel = new Cliente();
        $alumnos = $alumnosModel->all("SELECT * FROM usuarios WHERE permiso = 'alumno'");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos-read.php"; 

    }

    public function agregarAlumno(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_create.php"; 

    }
}


