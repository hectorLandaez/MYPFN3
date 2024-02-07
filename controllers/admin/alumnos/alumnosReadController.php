<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnosReadController{

    protected $model;

    public  function __construct()
    {
        $this-> model =new Cliente();
    }

    public function index(){


        $clases = $this->model->all("SELECT * FROM clases");
        $alumnos = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno'");
        $inscripciones =  $this->model->all("SELECT * FROM inscripciones");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos-read.php"; 

    }


    public function agregarAlumno(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_create.php"; 

    }

    public function deleteAlumno($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if ($id === false || $id === null) {
            echo "ID no válido.";
            return;
        }
    
        $alumnoModel = new Cliente();
        $alumnoModel->destroy($id);
    
        header("Location: /CRUD_ALUMNOS");
        exit();
    }

    public function store($request){

        $response =$this->model->create($request);
        header("Location: /CRUD_ALUMNOS");
        exit();
    }

    public function editarAlumno($id){
        
        $alumnoUpdate = $this->model->update($id);
        header("Location: /CRUD_ALUMNOS");

    }

    public function ShowEdit($id){
        $alumno = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno' AND id = $id");

        foreach ($alumno as $alumnoInfo) {
 
        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_edit.php"; 

    }
    }

}


    


