<?php
require_once __DIR__ . "/../models/rol.php";

class rolController
{
    public function index()
    {
        $rolModel = new Rol();
        $rols = [];

        try {
            $rols = $rolModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/rol/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/rol/crear.php";
    }

    public function guardar()
    {
        $idrol = filter_input(INPUT_POST, 'idrol', FILTER_VALIDATE_INT);
        $nombrerol = trim($_POST["nombrerol"] ?? '');

        if (!$idrol || $nombrerol === '') {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $rolModel = new Rol();

        try {
            $resultado = $rolModel->guardar($idrol, $nombrerol);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /rol");
            exit;
        }
        echo "Error al guardar el rol";
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $rolModel = new Rol();
        $rol = $id ? $rolModel->getById($id) : false;

        if (!$rol) {
            http_response_code(404);
            echo "Rol no encontrado";
            return;
        }

        require_once __DIR__ . "/../views/rol/editar.php";
    }

    public function actualizar()
    {
        $idrol = filter_input(INPUT_POST, 'idrol', FILTER_VALIDATE_INT);
        $nombrerol = trim($_POST['nombrerol'] ?? '');

        if (!$idrol || $nombrerol === '') {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $rolModel = new Rol();

        try {
            $resultado = $rolModel->actualizar($idrol, $nombrerol);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /rol");
            exit;
        }
        echo "Error al actualizar el rol";
    }
}