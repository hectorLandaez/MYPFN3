<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnoController{

    private $model;

    public function __construct()
    {
        $this->model = new Cliente();
    }

    public function index(){
        $maestroId = 1;  

        $maestroName = $this->model->getMaestroNameById($maestroId);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/alumno.dashboard.php";
    }

    public function calificciones(){
        $maestroId = 1;  

        $maestroName = $this->model->getMaestroNameById($maestroId);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/alumno_calficaciones_read.php";
    }

}
