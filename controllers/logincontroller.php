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
            // Validar los campos de entrada (puedes hacer más validaciones según tus necesidades)
            if (empty($email) || empty($password)) {
                echo "Por favor, ingrese tanto el email como la contraseña.";
                return;
            }

            // Obtener usuario desde la base de datos
            $user = $this->model->login($email, $password);

            if ($user) {
                // Iniciar sesión y redirigir al dashboard según el rol
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
            } else {
                echo "Credenciales incorrectas. Inténtalo de nuevo.";
            }
        }


        public function index(){
    
            include  $_SERVER["DOCUMENT_ROOT"] . "/views/login.php"; 
    
        }
}
?>
