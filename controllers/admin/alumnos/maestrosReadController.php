<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class MaestrosReadController{
    protected $model;

    public  function __construct()
    {
        $this-> model =new Cliente();
    }
    public function index(){
        $maestrosModel = new Cliente();
        $clasesModel = new Cliente();

        $maestros = $maestrosModel->all("SELECT * FROM usuarios WHERE permiso = 'maestro';");
        $clases = $clasesModel->all("SELECT * FROM clases");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros-read.php";

    }

    public function agregarMaestro(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros_create.php";

    }
    public function deleteAlumno($id){
        $alumnoModel = new Cliente();
        $alumnoModel->destroy($id);
    
        header("Location: /CRUD_MAESTROS");
        exit();
    }

    public function store($request){
        $response =$this->model->create($request);
        header("Location: /CRUD_MAESTROS");
    }
    public function editarMaestro ($id){
        $maestrUpdate = $this->model->update($id);
        header("Location: /CRUD_MAESTROS");
    }

    public function ShowEdit($id)
    {

        $maestros = $this->model->all("SELECT * FROM usuarios WHERE id = $id");

        foreach ($maestros as $maestro) {

            include $_SERVER['DOCUMENT_ROOT'] . '/views/admin/CRUD_MAESTROS/admin_maestros_edit.php';
        }
    }

    public function search($id){
        $clasesModel = new Cliente();
        $maestros = $this->model->all("SELECT * FROM usuarios WHERE id = $id and permiso = 'maestro';");
        $clases = $clasesModel->all("SELECT * FROM clases");
         include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_MAESTROS/admin_maestros-read-filter.php";
     }
}

