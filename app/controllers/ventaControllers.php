<?php
require_once __DIR__ . "/../models/venta.php";

class ventaController
{
    public function index()
    {
        $ventaModel = new venta();

        try {
            $ventas = $ventaModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }


        require_once __DIR__ . "/../views/venta/index.php";
    }
    public function editar ()
    { 
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ventaModel = new venta();
        $venta = $ventaModel->getById($id);

        require_once __DIR__ . "/../views/venta/editar.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/venta/crear.php";
    }

    public function guardar()
    {
        $idventa = $_POST["idventa"];
        $fecha_venta = $_POST["fecha_venta"];
        $idusuario = $_POST["idusuario"];

        $ventaModel = new venta();
        $resultado = $ventaModel->guardar($idventa, $fecha_venta, $idusuario);

        if ($resultado) {
            echo "Venta guardada correctamente";
        } else {
            echo "Error al guardar la venta";
        }

        $stock = $_POST["stock"];

        $venta = new venta();
        $resultado = $venta->guardar($idventa, $fecha_venta, $idusuario);

        if ($resultado) {
            echo "Venta guardada correctamente";
        } else {
            echo "Error al guardar la venta";
        }
    }
}
