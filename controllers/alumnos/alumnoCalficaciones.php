<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnoCalificacionesController{
    
    protected $model;

    public  function __construct()
    {
        $this-> model =new Cliente();
    }
    public function index(){

        $alumnos = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno'");
        $inscripciones =  $this->model->all("SELECT * FROM inscripciones");
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/alumno_calficaciones_read.php";
    }

}
