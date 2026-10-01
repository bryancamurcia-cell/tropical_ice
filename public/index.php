<?php

require_once __DIR__ . "/../app/controllers/productosControllers.php";
require_once __DIR__ . "/../app/controllers/rolControllers.php";
require_once __DIR__ . "/../app/controllers/usuarioControllers.php";
require_once __DIR__ . "/../app/controllers/ventaControllers.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // ignora ?parametros

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

if ($method === "GET" && $uri === "/rol") {
    $rol = new rolController();
    $rol->index();
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
if ($method === "GET" && $uri === "/venta") {
    $venta = new ventaController();
    $venta->index();
}