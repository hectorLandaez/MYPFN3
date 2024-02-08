<?php

require_once "./controllers/logincontroller.php";
require_once "./controllers/logoutcontroller.php";

require_once "./controllers/alumnos/alumnoController.php";
require_once "./controllers/maestros/maestroController.php";
require_once "./controllers/admin/alumnos/adminController.php";


require_once "./controllers/admin/alumnos/alumnosReadController.php";
require_once "./controllers/admin/alumnos/clasesReadController.php";
require_once "./controllers/admin/alumnos/maestrosReadController.php";
require_once "./controllers/admin/alumnos/permisosReadController .php";


$logoutcontroller = new Logoutcontroller();
$logincontroller = new LoginController();
$adminController = new AdminController();

$alumnosReadController = new AlumnosReadController();
$maestrosReadController = new MaestrosReadController();
$clasesReadController = new ClasesReadController();
$permisosReadController = new PermisosReadController();

$alumnoController = new AlumnoController();
$maestroController = new MaestroController();


$method = $_SERVER["REQUEST_METHOD"];
$route = $_SERVER["REQUEST_URI"];
if ($method === 'POST' && $route === '/LOGIN') {
    $logincontroller->login($_POST['email'], $_POST['password']);
}

if ($method === 'POST') {
    switch ($route) {
        case 'LoginController';
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



        case '/edit/permiso';
            $permisosReadController->editarPermiso($_POST['id']);
            break;

        case '/alumno/delete';
            $alumnosReadController->deleteAlumno($_POST['id']);
            break;

        case '/edit/maestro';
            $maestrosReadController->editarMaestro($_POST['id']);
            break;

        case '/edit/clase';
            $clasesReadController->editarClase($_POST['id']);
            break;

    }
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $route = $_SERVER['REQUEST_URI'];

    if (isset($_GET['id'])) {
        switch ($route) {
            case "/editar-alumno?id={$_GET['id']}":
                $alumnosReadController->ShowEdit($_GET['id']);
                break;

            case "/editar-maestro?id={$_GET['id']}":
                $maestrosReadController->ShowEdit($_GET['id']);
                break;

            case "/editar-permiso?id={$_GET['id']}":
                $permisosReadController->ShowEdit($_GET['id']);
                break;

            case "/editar-clase?id={$_GET['id']}":
                $clasesReadController->ShowEdit($_GET['id']);
                break;

            case "/alumno?id={$_GET['id']}";
                $permisosReadController->search($_GET['id']);
                break;

            case "/maestro?id={$_GET['id']}";
                $maestrosReadController->search($_GET['id']);
                break;

            case "/alumnos?id={$_GET['id']}";
                $alumnosReadController->search($_GET['id']);
                break;

            case "/clase?id={$_GET['id']}";
                $clasesReadController->search($_GET['id']);
                break;                     
        }
    }

    switch ($route) {
        case '/index.php':
            $logincontroller->index();
            break;
        case '/logout';
            $logoutcontroller->logout();
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

        case '/admin/dashboard';
            $adminController->index();
            break;

        case '/CRUD_ALUMNOS';
            $alumnosReadController->index();
            break;

        case '/adAlumno';
            $alumnosReadController->agregarAlumno();
            break;


        case '/alumno/dashboard';
            $alumnoController->index();
            break;

        case '/alumno/calficaciones';
            $alumnoController->calificciones();
            break;

        case '/maestro/dashboard';
            $maestroController->index();
            break;

        case '/maestro/alumnos';
            $maestroController->calificaciones();
            break;
    }
}
