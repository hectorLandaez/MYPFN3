<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class PermisosReadController
{

    protected $model;

    public  function __construct()
    {
        $this->model = new Cliente();
    }
    public function index()
    {
        $usuariosModel = new Cliente();
        $usuarios = $usuariosModel->all("SELECT * FROM usuarios");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/PERMISOS_USUARIOS/admin_permisos_read.php";
    }

    public function editarPermiso($id)
    {

        $permisoUpdate = $this->model->updateState($id);
        header("Location: /PERMISOS");  
    }

    public function ShowEdit($id)
    {

        $usuarios = $this->model->all("SELECT * FROM usuarios WHERE id = $id");

        foreach ($usuarios as $usuario) {

            include $_SERVER['DOCUMENT_ROOT'] . '/views/admin/PERMISOS_USUARIOS/admin_permisos_edit.php';
        }
    }

    public function search($id){
    
       $usuarios = $this->model->all("SELECT * FROM usuarios WHERE id = $id");
        
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/PERMISOS_USUARIOS/admin_permisos_read_filter.php";

    }
    
}

