<?php

require_once __DIR__ . "/../app/controllers/productosControllers.php";
require_once __DIR__ . "/../app/controllers/rolControllers.php";
require_once __DIR__ . "/../app/controllers/usuarioControllers.php";
require_once __DIR__ . "/../app/controllers/ventaControllers.php";


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);


?>

<a href="/producto/crear">crear producto</a>
<a href="/rol">rol</a>
<a href="/usuario">usuario</a>
<a href="/venta">venta</a>
<a href="/producto">producto</a>

<?php

if ($method === "GET" && $uri === "/producto/crear") {
    $producto = new productoController();
    $producto->crear();
}

if ($method === "POST" && $uri === "/producto") {
    $producto = new productoController();
    $producto->guardar();
}

if ($method === "GET" && $uri === "/producto") {
    $producto = new productoController();
    $producto->index();
}
if ($method === "GET" && $ruta === "/producto/editar") {
    $productoController = new productoController();
    $productoController->editar();
}


if ($method === "POST" && $uri === "/producto/actualizar") {
    $productoController = new productoController();
    $productoController->actualizar();
    

}

if ($method === "GET" && $uri === "/rol") {
    $rol = new rolController();
    $rol->index();
}
if ($method === "GET" && $ruta === "/rol/editar") {
    $rolController = new rolController();
    $rolController->editar($_GET['id']);
}


if ($method === "GET" && $uri === "/rol/crear") {
    $rol = new rolController();
    $rol->crear();
}

if ($method === "POST" && $uri === "/rol") {
    $rol = new rolController();
    $rol->guardar();
}


if ($method === "GET" && $uri === "/usuario") {
    $usuario = new usuarioController();
    $usuario->index();
}
if ($method === "GET" && $ruta === "/usuario/editar") {
    $usuarioController = new usuarioController();
    $usuarioController->editar($_GET['id']);
}


if ($method === "GET" && $uri === "/usuario/crear") {
    $usuario = new usuarioController();
    $usuario->crear();
}

if ($method === "POST" && $uri === "/usuario") {
    $usuario = new usuarioController();
    $usuario->guardar();
}
if ($method === "GET" && $uri === "/venta") {
    $venta = new ventaController();
    $venta->index();
}
