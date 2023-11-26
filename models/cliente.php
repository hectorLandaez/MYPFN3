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

        $res = $this->db->query("INSERT INTO usuarios (name, email, FN) VALUES ('$nombre', '$email', '$Fechas')");
        
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

        $res = $this->db->query("INSERT INTO clases (name) VALUES ('$nombre')");
        
        if($res){
            $ultimoId=$this->db->insert_id;
            $res = $this->db->query("select * from clases where id = $ultimoId");
            $data = $res->fetch_assoc();
        } else{
            return "no se pudo crear el usuario";
        }
    }
 
}