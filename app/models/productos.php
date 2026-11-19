<?php
require_once __DIR__ . "/../../config/Database.php";

class Producto
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM productos";
        $consulta = $this->connection->query($sql);
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
        $stmt = $this->connection->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // devuelve un ARRAY: $producto['nombre']
    }

    public function actualizar($id, $nombre, $precio, $stock)
    {
        $sql = "UPDATE productos
                SET nombre = :nombre, precio = :precio, stock = :stock
                WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <- este faltaba
        return $stmt->execute();
    }
        public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}