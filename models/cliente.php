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
        $this->db->query("delete from clientes where id = $id");
    }
 
}
