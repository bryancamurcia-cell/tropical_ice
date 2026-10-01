<?php
require_once __DIR__ ."/../models/venta.php";

class ventaController{
    public function index(){
        $ventaModel = new venta();

        try{
            $ventas = $ventaModel->getAll();
        } catch (PDOException){
            echo "Se encontraron errores";
        }
        

        require_once __DIR__ ."/../views/venta/index.php";
    }
}