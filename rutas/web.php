<?php
$rutas=[
    "GET"=>[
        "/rol"=>[new rolController(),"index"],
        "/rol/crear"=>[new rolController(),"crear"],
        "/rol/editar"=>[new rolController(),"editar"],
        "/usuario"=>[new usuarioController(),"index"],
        "/usuario/crear"=>[new usuarioController(),"crear"],
        "/usuario/editar"=>[new usuarioController(),"editar"],
        "/venta"=>[new ventaController(),"index"],
        "/venta/crear"=>[new ventaController(),"crear"],
        "/venta/editar"=>[new ventaController(),"editar"],
        "/producto"=>[new productoController(),"index"],
        "/producto/crear"=>[new productoController(),"crear"],
        "/producto/editar"=>[new productoController(),"editar"]
    ],
    "POST"=>[
        "/rol"=>[new rolController(),"guardar"],
        "/rol/actualizar"=>[new rolController(),"actualizar"],
        "/rol/eliminar"=>[new rolController(),"eliminar"],
        "/usuario"=>[new usuarioController(),"guardar"],
        "/usuario/actualizar"=>[new usuarioController(),"actualizar"],
        "/usuario/eliminar"=>[new usuarioController(),"eliminar"],
        "/venta"=>[new ventaController(),"guardar"],
        "/venta/actualizar"=>[new ventaController(),"actualizar"],
        "/venta/eliminar"=>[new ventaController(),"eliminar"],
        "/producto"=>[new productoController(),"guardar"],
        "/producto/actualizar"=>[new productoController(),"actualizar"],
        "/producto/eliminar"=>[new productoController(),"eliminar"]
    ]
];

return $rutas;



