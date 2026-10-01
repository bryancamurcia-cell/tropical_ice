<?php
require_once __DIR__ . "/../../config/Database.php";

class Rol{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }
    

    public function getAll()
    {
        $sql="SELECT * FROM rol";
        $consulta=$this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

     public function guardar($idrol, $nombrerol)
    {
        $sql = "INSERT INTO rol (idrol, nombrerol) VALUES (:idrol, :nombrerol)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':idrol', $idrol);
        $stmt->bindParam(':nombrerol', $nombrerol);
        return $stmt->execute();
    }
}
?>