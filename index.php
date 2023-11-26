<?php

require_once "./controllers/logincontroller.php";

require_once "./controllers/alumosController.php";


require_once "./controllers/admin/alumnos/alumnosReadController.php";
require_once "./controllers/admin/alumnos/clasesReadController.php";
require_once "./controllers/admin/alumnos/maestrosReadController.php";
require_once "./controllers/admin/alumnos/permisosReadController .php";



$logincontroller = new LoginController();
$alumnosController = new AlumnosController();

$alumnosReadController = new AlumnosReadController();
$maestrosReadController = new MaestrosReadController();
$clasesReadController = new ClasesReadController();
$permisosReadController = new PermisosReadController();


$method = $_SERVER["REQUEST_METHOD"];
$route = $_SERVER["REQUEST_URI"];


if($method === 'GET'){
    switch ($route) {

        case '/index.php';
            $alumnosController->index();
            break;

        case '/CRUD_CLASES';
            $clasesReadController->index();
            break;

        case '/CRUD_MAESTROS';
            $maestrosReadController->index();
            break;

        case '/PERMISOS';
            $permisosReadController->index();
            break;
            
        case '/CRUD_ALUMNOS';
            $alumnosReadController->index();
            break;                            
        default:
        echo "no encontramos la ruta";
        break;
    }
} 
 