<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class ClasesReadController{

    public function index(){
        $clasesModel = new Cliente();
        $clases = $clasesModel->all("SELECT * FROM clases");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_CLASES/admin_clases_read.php"; 

    }

    public function agregarClase(){

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/CRUD_CLASES/admin_clases_create.php"; 

    }
    
}


