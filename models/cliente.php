<?php
class Cliente
{
    private $db;

    public function __construct()
    {
        $config = include($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        try {
            $this->db = new mysqli(
                $config["host"],
                $config["username"],
                $config["password"],
                $config["dbname"]
            );
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function all($database)
    {
        $res = $this->db->query("$database");

        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function destroy($id)
    {
        $this->db->query("delete from usuarios where id = $id");
    }

    public function destroyc($id)
    {
        $this->db->query("delete from clases where id = $id");
    }

    public function create($data)
    {
        $nombre =$data["Nombre"];
        $email =$data["email"];
        $Fechas =$data["fechas"];
        $permiso =$data['permiso'];

        $res = $this->db->query("INSERT INTO usuarios (name, email, FN, permiso) VALUES ('$nombre', '$email', '$Fechas', '$permiso')");
        
        if($res){
            $ultimoId=$this->db->insert_id;
            $res = $this->db->query("select * from usuarios where id = $ultimoId");
            $data = $res->fetch_assoc();
        } else{
            return "no se pudo crear el usuario";
        }
    }

    public function createClase($data)
    {
        $nombre =$data["Nombre"];
        $maestro =$data["maestro"];

        $res = $this->db->query("INSERT INTO clases (name, maestro) VALUES ('$nombre', '$maestro')");
        
        if($res){
            $ultimoId=$this->db->insert_id;
            $res = $this->db->query("select * from clases where id = $ultimoId");
            $data = $res->fetch_assoc();
        } else{
            return "no se pudo crear el usuario";
        }
    }

    public function login($email, $password)
    {
        $email = mysqli_real_escape_string($this->db, $email);
        $password = mysqli_real_escape_string($this->db, $password);

        $sql = "SELECT * FROM usuarios WHERE email='$email' AND contraseña='$password'";
        $result = $this->db->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            return $user;
        } else {
            return false;
        }
    }

    public function getMaestroNameById($maestroId)
    {
        $query = "SELECT name FROM usuarios WHERE id = $maestroId";
        $result = $this->db->query($query);

        if ($result) {
            $maestro = $result->fetch_assoc();
            return $maestro['name'];
        } else {
            // Manejo de error, podrías lanzar una excepción o devolver un valor predeterminado
            return "Nombre no encontrado";
        }
    }
}
 

