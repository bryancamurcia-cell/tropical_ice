


///

<?php
// Permite usar header("Location: ...") aunque el menú ya se haya impreso
ob_start();

require_once __DIR__ . "/../app/controllers/productosControllers.php";
require_once __DIR__ . "/../app/controllers/rolControllers.php";
require_once __DIR__ . "/../app/controllers/usuarioControllers.php";
require_once __DIR__ . "/../app/controllers/ventaControllers.php";

$method = $_SERVER['REQUEST_METHOD'];
// Solo la ruta, sin "?id=1" (por eso se usa $ruta y no REQUEST_URI completo)
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
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

/* ===================== PRODUCTO ===================== */

switch($ruta){
    case "/producto";
    if ($method === "GET") {
    (new productoController())->index();
    }
}
switch($ruta){
    case "/producto/crear";
    if($method === "GET") {
    (new productoController())->crear();
    }
}
switch($ruta){
    case "/producto";
    if($method === "POST") {
    (new productoController())->guardar();
    }
}
switch($ruta){
    case "/producto/editar";
    if($method === "GET") {
    (new productoController())->editar();
    }
}
switch($ruta){
    case "/producto/actualizar";
    if($method === "POST") {
    (new productoController())->actualizar();
    }
}
switch($ruta){
    case "/producto/eliminar";
    if($method === "POST") {
    (new productoController())->eliminar();
}

}

/* ===================== ROL ===================== */
    switch($ruta){
    case "/rol";
    if ($method === "GET") {
    (new productoController())->index();
    }
}
     switch($ruta){
    case "/rol/crear";
    if ($method === "GET") {
    (new productoController())->crear();
    }
}
    switch($ruta){
    case "/rol";
    if($method === "POST") {
    (new productoController())->guardar();
    }
}
      switch($ruta){
    case "/rol/editar";
    if ($method === "GET") {
    (new productoController())->editar();
    }
}
    switch($ruta){
    case "/rol/actualizar";
    if($method === "POST") {
    (new productoController())->actualizar();
    }
}

/* ===================== USUARIO ===================== */
      switch($ruta){
    case "/usuario";
    if ($method === "GET") {
    (new productoController())->index();
    }
      }
      switch($ruta){
    case "/usuario/crear";
    if ($method === "GET") {
    (new productoController())->crear();
    }
}
        switch($ruta){
    case "/usuario";
    if($method === "POST") {
    (new productoController())->guardar();
    } 
}
    switch($ruta){
    case "/usuario/editar";
    if ($method === "GET") {
    (new productoController())->editar();
    }
}
     switch($ruta){
    case "/usuario/actualizar";
    if($method === "POST") {
    (new productoController())->actualizar();
    }
}

/* ===================== VENTA ===================== */
      switch($ruta){
    case "/venta";
    if ($method === "GET") {
    (new productoController())->index();
    }
}
      switch($ruta){
    case "/venta/crear";
    if ($method === "GET") {
    (new productoController())->crear();
    }
}
       switch($ruta){
    case "/venta";
    if($method === "POST") {
    (new productoController())->guardar();
    }
}
         switch($ruta){
    case "/venta/editar";
    if ($method === "GET") {
    (new productoController())->editar();
    }
}
         switch($ruta){
    case "/venta/actualizar";
    if ($method === "POST") {
    (new productoController())->actualizar();
    }
}


?>