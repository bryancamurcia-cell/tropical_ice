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


    
        
}
