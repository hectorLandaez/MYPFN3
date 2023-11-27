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


if($method === 'POST'){
    switch ($route){
        case '/alumnos/delete';
        $alumnosReadController->deleteAlumno($_POST['id']);
        break;

        case '/adAlumno';
        $alumnosReadController->store($_POST);
        break;

        case '/maestros/delete';
        $maestrosReadController->deleteAlumno($_POST['id']);
        break;

        case '/adMaestro';
        $maestrosReadController->store($_POST);
        break;

        case '/adClase';
            $clasesReadController->store($_POST);
            break;

        case '/clase/delete';
            $clasesReadController->deleteClase($_POST['id']);
            break;    
        case '/edit/alumno';
            $alumnosReadController->editarAlumno($_POST['id']);
            break;              
    default:
        echo "no encontramos la ruta";
        break;
    }

}

if($method === 'GET'){
    switch ($route) {

        case '/index.php';
            $alumnosController->index();
            break;

        case '/CRUD_CLASES';
            $clasesReadController->index();
            break;

        case '/adClase';
            $clasesReadController->agregarClase();
            break;

        case '/CRUD_MAESTROS';
            $maestrosReadController->index();
            break;

        case '/adMaestro';
            $maestrosReadController->agregarMaestro();
            break;

        case '/PERMISOS';
            $permisosReadController->index();
            break;
            
        case '/CRUD_ALUMNOS';
            $alumnosReadController->index();
            break;

        case '/adAlumno';
            $alumnosReadController->agregarAlumno();
            break;

        case '/edit/alumno';
        $alumnosReadController->agregarAlumno();
        break;    
        default:
        echo "no encontramos la ruta";
        break;
    }
} 
 