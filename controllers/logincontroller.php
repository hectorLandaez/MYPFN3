<?php
class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new Cliente();
    }

    public function login($email, $password)
        {
            if (empty($email) || empty($password)) {
                echo "Por favor, ingrese tanto el email como la contraseña.";
                return;
            }
             $user = $this->model->login($email, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
            
                switch ($user['permiso']) {
                    case 'admin':
                        header("Location: /admin/dashboard");
                        break;
                    case 'alumno':
                        header("Location: /alumno/dashboard");
                        break;
                    case 'maestro':
                        header("Location: /maestro/dashboard");
                        break;
                    default:
                        echo "Credenciales incorrectas. Inténtalo de nuevo.";
                        break;
                }
                exit();
            }
        }


        public function index(){
    
            include  $_SERVER["DOCUMENT_ROOT"] . "/views/login.php"; 
    
        }
}
?>
