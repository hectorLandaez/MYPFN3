<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";

class AdminController{

    public function index(){
        include $_SERVER["DOCUMENT_ROOT"] . "/views\admin/admin_dashboard.php";

    }

    
}
