<?php
require_once __DIR__ . "/../models/usuario.php";

class usuarioController
{
    public function index()
    {
        $usuarioModel = new Usuario();
        $usuarios = [];

        try {
            $usuarios = $usuarioModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/usuario/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/usuario/crear.php";
    }

    public function guardar()
    {
        $nombreusuario = trim($_POST["nombreusuario"] ?? '');
        $usuario       = trim($_POST["usuario"] ?? '');
        $password      = $_POST["password"] ?? '';
        $direccion     = trim($_POST["direccion"] ?? '');
        $idrol         = filter_input(INPUT_POST, 'idrol', FILTER_VALIDATE_INT);

        if ($nombreusuario === '' || $usuario === '' || $password === '' || $direccion === '' || !$idrol) {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $usuarioModel = new Usuario();

        try {
            $resultado = $usuarioModel->guardar($nombreusuario, $usuario, $password, $direccion, $idrol);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /usuario");
            exit;
        }
        echo "Error al guardar el usuario (¿el rol existe?)";
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $usuarioModel = new Usuario();
        $usuario = $id ? $usuarioModel->getById($id) : false;

        if (!$usuario) {
            http_response_code(404);
            echo "Usuario no encontrado";
            return;
        }

        require_once __DIR__ . "/../views/usuario/editar.php";
    }

    public function actualizar()
    {
        $idusuario     = filter_input(INPUT_POST, 'idusuario', FILTER_VALIDATE_INT);
        $nombreusuario = trim($_POST["nombreusuario"] ?? '');
        $usuario       = trim($_POST["usuario"] ?? '');
        $password      = $_POST["password"] ?? '';
        $direccion     = trim($_POST["direccion"] ?? '');
        $idrol         = filter_input(INPUT_POST, 'idrol', FILTER_VALIDATE_INT);

        if (!$idusuario || $nombreusuario === '' || $usuario === '' || $password === '' || $direccion === '' || !$idrol) {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $usuarioModel = new Usuario();

        try {
            $resultado = $usuarioModel->actualizar($idusuario, $nombreusuario, $usuario, $password, $direccion, $idrol);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /usuario");
            exit;
        }
        echo "Error al actualizar el usuario (¿el rol existe?)";
    }
}