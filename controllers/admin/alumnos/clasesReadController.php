<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class ClasesReadController{
    protected $model;

    public  function __construct()
    {
        $this-> model =new Cliente();

    }
    public function index() {
        $query = "SELECT id_clase, COUNT(id_estudiante) AS total_inscritos FROM inscripciones GROUP BY id_clase";
        
        $inscritosModel = new Cliente();
        $inscritosPorClase = $inscritosModel->all($query);
        
        $clasesModel = new Cliente();
        $clases = $clasesModel->all("SELECT * FROM clases");
    
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_CLASES/admin_clases_read.php";
    }

    public function agregarClase(){
        
        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_CLASES/admin_clases_create.php"; 

    }

    public function deleteClase($id){
        $claseModel = new Cliente();
        $claseModel->destroyc($id);
        header("Location: /CRUD_CLASES");
        exit();
    }

    public function store($request){
        $response =$this->model->createClase($request);
        header("Location: /CRUD_CLASES");
        exit();
    }

    public function editarClase ($id){
        $claseUpdate = $this->model->updateClse($id);
        header("Location: /CRUD_CLASES");
    }

    public function ShowEdit($id)
    {

        $clases = $this->model->all("SELECT * FROM clases WHERE id = $id");

        foreach ($clases as $clase) {

            include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_CLASES/admin_clases_edit.php";
        }
    }

}
    



