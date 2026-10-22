<?php
require_once __DIR__ . "/../models/usuario.php";

class usuarioController
{
    public function index()
    {
        $usuarioModel = new usuario();

        try {
            $usuarios = $usuarioModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }


        require_once __DIR__ . "/../views/usuario/index.php";
    }
    public function editar ()
    { 
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $usuarioModel = new usuario();
        $usuario = $usuarioModel->getById($id);

        require_once __DIR__ . "/../views/usuario/editar.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/usuario/crear.php";
    }

    public function guardar()
    {
        $nombreusuario = $_POST["nombreusuario"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $direccion = $_POST["direccion"];

        $usuarioModel = new usuario();
        $resultado = $usuarioModel->guardar($nombreusuario, $usuario, $password, $direccion);

        if ($resultado) {
            echo "Usuario guardado correctamente";
        } else {
            echo "Error al guardar el usuario";
        }

        $stock = $_POST["stock"];

        $usuario = new usuario();
        $resultado = $usuario->guardar($nombreusuario, $usuario, $password, $direccion);

        if ($resultado) {
            echo "Usuario guardado correctamente";
        } else {
            echo "Error al guardar el usuario";
        }
    }
}
