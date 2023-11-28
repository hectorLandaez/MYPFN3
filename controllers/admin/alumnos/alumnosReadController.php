<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AlumnosReadController{

    protected $model;

    public  function __construct()
    {
        $this-> model =new Cliente();
    }

    public function index(){
        
        $alumnos = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno'");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos-read.php"; 

    }

    public function show(){
        
    }

    public function agregarAlumno(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_create.php"; 

    }

    public function deleteAlumno($id){
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
        
/*      $alumno = $this->model->all("SELECT * FROM usuarios WHERE permiso = 'alumno' AND id = $id");
 */
        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_edit.php"; 

    }


    public function shoewEdit(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_ALUMNOS/admin_alumnos_edit.php"; 
        
    }
}
    


