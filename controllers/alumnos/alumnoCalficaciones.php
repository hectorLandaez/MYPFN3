<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnoCalificacionesController{

    public function index(){
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/alumno_calficaciones_read.php";
    }

}
