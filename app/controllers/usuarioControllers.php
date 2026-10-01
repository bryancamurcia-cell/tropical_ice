<?php
require_once __DIR__ ."/../models/usuario.php";

class usuarioController{
    public function index(){
        $usuarioModel = new usuario();

        try{
            $usuarios = $usuarioModel->getAll();
        } catch (PDOException){
            echo "Se encontraron errores";
        }
        

        require_once __DIR__ ."/../views/usuario/index.php";
    }
}