<?php
require_once __DIR__ ."/../models/rol.php";

class rolController{
    public function index(){
        $rolModel = new Rol();

        try{
            $rols = $rolModel->getAll();
        } catch (PDOException){
            echo "Se encontraron errores";
        }
        

        require_once __DIR__ ."/../views/rol/index.php";
    }
    public function crear(){
        require_once __DIR__ ."/../views/rol/crear.php";
    }

    public function guardar(){
            $idrol = $_POST["idrol"];     
            $nombrerol = $_POST["nombrerol"];
            

            $rol = new Rol();
            $resultado= $rol->guardar($idrol, $nombrerol);

            if($resultado ){
                echo "Rol guardado correctamente";
            } else {
                echo "Error al guardar el rol";
            }

    }


    
        
}
