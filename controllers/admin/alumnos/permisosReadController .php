<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class PermisosReadController{

    public function index(){
        $usuariosModel = new Cliente();
        $usuarios = $usuariosModel->all("SELECT * FROM usuarios");

        include  $_SERVER["DOCUMENT_ROOT"] . "/views/admin/PERMISOS_USUARIOS/admin_permisos_read.php"; 

    }

    
}


