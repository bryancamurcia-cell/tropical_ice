<?php
require_once __DIR__ ."/../models/productos.php";

class productoController{
    public function index(){
        $productoModel = new Producto();

        try{
            $productos = $productoModel->getAll();
        } catch (PDOException){
            echo "Se encontraron errores";
        }
        

        require_once __DIR__ ."/../views/productos/index.php";
    }
    public function crear(){
        require_once __DIR__ ."/../views/productos/crear.php";
    }

    public function guardar(){
            $nombre = $_POST["nombre"];     
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];

            $producto = new Producto();
            $resultado= $producto->guardar($nombre, $precio, $stock);

            if($resultado ){
                echo "Producto guardado correctamente";
            } else {
                echo "Error al guardar el producto";
            }

    }
public function editar()
{

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $modeloproducto = new Producto();
    $producto = $modeloproducto->getById($id); 

    require_once __DIR__ . "/../views/productos/editar.php";
}

public function actualizar()
{
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    
    $productoModel = new Producto();
    $resultado = $productoModel->actualizar($id, $nombre, $precio, $stock);

    if ($resultado) {
        
        header("Location: /producto");
        exit();
    } else {
        echo "Error al actualizar el producto";
    }
}
}
