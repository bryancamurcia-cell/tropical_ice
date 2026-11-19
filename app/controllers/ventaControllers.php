<?php
require_once __DIR__ . "/../models/venta.php";

class ventaController
{
    public function index()
    {
        $ventaModel = new Venta();
        $ventas = [];

        try {
            $ventas = $ventaModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/venta/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/venta/crear.php";
    }

    public function guardar()
    {
        $fecha_venta = $_POST["fecha_venta"] ?? '';
        $idusuario   = filter_input(INPUT_POST, 'idusuario', FILTER_VALIDATE_INT);

        if ($fecha_venta === '' || !$idusuario) {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $ventaModel = new Venta();

        try {
            $resultado = $ventaModel->guardar($idusuario, $fecha_venta);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /venta");
            exit;
        }
        echo "Error al guardar la venta (¿el usuario existe?)";
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ventaModel = new Venta();
        $venta = $id ? $ventaModel->getById($id) : false;

        if (!$venta) {
            http_response_code(404);
            echo "Venta no encontrada";
            return;
        }

        require_once __DIR__ . "/../views/venta/editar.php";
    }

    public function actualizar()
    {
        $idventa     = filter_input(INPUT_POST, 'idventa', FILTER_VALIDATE_INT);
        $fecha_venta = $_POST["fecha_venta"] ?? '';
        $idusuario   = filter_input(INPUT_POST, 'idusuario', FILTER_VALIDATE_INT);

        if (!$idventa || $fecha_venta === '' || !$idusuario) {
            http_response_code(400);
            echo "Datos no válidos";
            return;
        }

        $ventaModel = new Venta();

        try {
            $resultado = $ventaModel->actualizar($idventa, $fecha_venta, $idusuario);
        } catch (PDOException) {
            $resultado = false;
        }

        if ($resultado) {
            header("Location: /venta");
            exit;
        }
        echo "Error al actualizar la venta (¿el usuario existe?)";
    }
}