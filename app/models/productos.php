<?php
require_once __DIR__ . "/../../config/Database.php";

class Producto{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }
    

    public function getAll()
    {
        $sql="SELECT * FROM productos";
        $consulta=$this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $precio, $stock)
    {
        $sql = "INSERT INTO productos (nombre, precio, stock) VALUES (:nombre, :precio, :stock)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);
        return $stmt->execute();
    }
  public function getById($id)
{
    $stmt = $this->connection->prepare("SELECT * FROM productos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function actualizar($id, $nombre, $precio, $stock)
{
    $stmt = $this->db->prepare(
        "UPDATE productos SET nombre = ?, precio = ?, stock = ? WHERE id = ?"
    );
    return $stmt->execute([$nombre, $precio, $stock, $id]);
}

}






