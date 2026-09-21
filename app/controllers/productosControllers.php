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
}