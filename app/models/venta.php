<?php
require_once __DIR__ . "/../../config/Database.php";

class venta{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }
    

    public function getAll()
    {
        $sql="SELECT * FROM venta";
        $consulta=$this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    public function guardar($idusuario, $fecha_venta)
    {
        $sql = "INSERT INTO venta (idusuario, fecha_venta) VALUES (:idusuario, :fecha_venta)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':idusuario', $idusuario);
        $stmt->bindParam(':fecha_venta', $fecha_venta);
        return $stmt->execute();
    }
     public function getById($id)
{
    $stmt = $this->connection->prepare("SELECT * FROM usuario WHERE idusuario = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
 

?>