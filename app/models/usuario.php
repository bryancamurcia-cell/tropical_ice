<?php
require_once __DIR__ . "/../../config/Database.php";

class Usuario
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM usuario";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombreusuario, $usuario, $password, $direccion, $idrol)
    {
        $sql = "INSERT INTO usuario (nombreusuario, usuario, password, direccion, idrol)
                VALUES (:nombreusuario, :usuario, :password, :direccion, :idrol)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nombreusuario', $nombreusuario);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':idrol', $idrol, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM usuario WHERE idusuario = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($idusuario, $nombreusuario, $usuario, $password, $direccion, $idrol)
    {
        $sql = "UPDATE usuario
                SET nombreusuario = :nombreusuario,
                    usuario       = :usuario,
                    password      = :password,
                    direccion     = :direccion,
                    idrol         = :idrol
                WHERE idusuario = :idusuario";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nombreusuario', $nombreusuario);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':idrol', $idrol, PDO::PARAM_INT);
        $stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);
        return $stmt->execute();
    }
}