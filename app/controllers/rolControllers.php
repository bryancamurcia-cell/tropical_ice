<?php
require_once __DIR__ . "/../models/rol.php";

class rolController
{
    public function index()
    {
        $rolModel = new rol();

        try {
            $rols = $rolModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }


        require_once __DIR__ . "/../views/rol/index.php";
    }
    public function editar ()
    { 
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $rolModel = new rol();
        $rol = $rolModel->getById($id);

        require_once __DIR__ . "/../views/rol/editar.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/rol/crear.php";
    }

    public function guardar()
    {
        $nombrerol = $_POST["nombrerol"];
       

        $rolModel = new rol();
        $resultado = $rolModel->guardar($idrol, $nombrerol);

        if ($resultado) {
            echo "Rol guardado correctamente";
        } else {
            echo "Error al guardar el rol";
        }

    

        $rol = new rol();
        $resultado = $rol->guardar($idrol, $nombrerol);

        if ($resultado) {
            echo "Rol guardado correctamente";
        } else {
            echo "Error al guardar el rol";
        }
    }
}

