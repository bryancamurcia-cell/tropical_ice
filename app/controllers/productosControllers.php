<?php

require_once __DIR__ . '/../models/productos.php';

class ProductoController
{
    public function index()
    {
        $productoModel = new Producto();
        $productos = [];

        try {
            $productos = $productoModel->getAll();
        } catch (PDOException $e) {
            echo 'Se encontraron errores';
        }

        require_once __DIR__ . '/../views/productos/index.php';
    }

    public function crear()
    {
        require_once __DIR__ . '/../views/productos/crear.php';
    }

    public function guardar()
    {
        $nombre = trim($_POST['nombre'] ?? '');
        $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);
        $stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);

        if ($nombre === '' || $precio === false || $precio === null || $stock === false || $stock === null) {
            http_response_code(400);
            echo 'Datos no válidos';
            return;
        }

        $productoModel = new Producto();

        try {
            $resultado = $productoModel->guardar($nombre, $precio, $stock);
        } catch (PDOException $e) {
            $resultado = false;
        }

        if ($resultado) {
            header('Location: /producto');
            exit;
        }

        echo 'Error al guardar el producto';
    }

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $productoModel = new Producto();
        $producto = $id ? $productoModel->getById($id) : false;

        if (!$producto) {
            http_response_code(404);
            echo 'Producto no encontrado';
            return;
        }

        require_once __DIR__ . '/../views/productos/editar.php';
    }

    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $nombre = trim($_POST['nombre'] ?? '');
        $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);
        $stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);

        if (!$id || $nombre === '' || $precio === false || $precio === null || $stock === false || $stock === null) {
            http_response_code(400);
            echo 'Datos no válidos';
            return;
        }

        $productoModel = new Producto();

        try {
            $resultado = $productoModel->actualizar($id, $nombre, $precio, $stock);
        } catch (PDOException $e) {
            $resultado = false;
        }

        if ($resultado) {
            header('Location: /producto');
            exit;
        }

        echo 'Error al actualizar el producto';
    }

    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            http_response_code(400);
            echo 'ID inválido';
            return;
        }

        $productoModel = new Producto();

        try {
            $resultado = $productoModel->eliminar($id);
        } catch (PDOException $e) {
            $resultado = false;
        }

        if ($resultado) {
            header('Location: /producto');
            exit;
        }

        echo 'Error al eliminar el producto';
    }
}