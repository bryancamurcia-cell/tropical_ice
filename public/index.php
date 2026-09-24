<?php

require_once __DIR__ . "/../app/controllers/productosControllers.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/producto">productos</a>

<?php
if ($method === 'GET' && $uri === '/producto') {
    $ProductoController = new productoController();
    $ProductoController->index();
}
?>