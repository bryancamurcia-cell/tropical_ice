<?php
require_once __DIR__ . "/../app/controllers/productosControllers.php";
require_once __DIR__ . "/../app/controllers/rolControllers.php";
require_once __DIR__ . "/../app/controllers/usuarioControllers.php";
require_once __DIR__ . "/../app/controllers/ventaControllers.php";
$rutas = require dirname(__DIR__) . "/../rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);
?>
    
<a href="/rol">rol</a>
<a href="/usuario">usuario</a>
<a href="/venta">venta</a>
<a href="/producto">producto</a>
<a href="/rol/crear">crear rol</a>
<a href="/usuario/crear">crear usuario</a>
<a href="/venta/crear">crear venta</a>
<a href="/producto/crear">crear producto</a>

<?php
$enrutamiento=$rutas[$method][$ruta] ?? null;

if ($enrutamiento) {
    $controlador = $enrutamiento[0];
    $metodo = $enrutamiento[1];

    $controlador = new $controlador();
    $controlador->$metodo();
} else {
    http_response_code(404);
    echo "Página no encontrada";
}
