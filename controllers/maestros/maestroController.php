<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class MaestroController
{
    private $model;

    public function __construct()
    {
        $this->model = new Cliente();
    }

    public function index()
    {
        $maestroId = 1;  

        $maestroName = $this->model->getMaestroNameById($maestroId);

        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/maestro.dashboard.php";
    }

    public function calificaciones()
    {
        $maestroId = 1;  

        $maestroName = $this->model->getMaestroNameById($maestroId);

        $alumnos = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno'");
        $clases = $this->model->all("SELECT * FROM clases");

        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/alumno_maestro_read.php";
    }
}
?>
