<?php
echo "Primer Ejercicio";
echo "<br>";
$lenguajes = ["PHP", "JavaScript", "Python", "Java", "C++"];

echo "Segundo lenguaje: " . $lenguajes[1] . "<br>";
echo "Quinto lenguaje: " . $lenguajes[4] . "<br>";
echo "Primer lenguaje: " . $lenguajes[0] . "<br>";

echo "<br><br>";




echo "Segundo Ejercicio";
echo "<br>";
$categorias = ["Tecnología", "Hogar", "Deportes", "Electrodomésticos"];

echo "La tercera categoría registrada es: " . $categorias[2];

echo "<br><br>";





echo "Tercer Ejercicio";
echo "<br>";
$aprendiz = [
    "nombre" => "bryan camilo murcia barahona", 
    "ficha" => "3230905", 
    "programa" => "Análisis y Desarrollo de Software (ADSO)", 
    "edad" => 22
];

echo "Nombre del aprendiz: " . $aprendiz["nombre"];
echo "<br>";
echo "Programa de formación: " . $aprendiz["programa"];

echo "<br><br>";





echo "Cuarto Ejercicio";
echo "<br>";
$proveedor = [
    "nombre" => "Tropical_ice",
    "ciudad" => "Puerto Salgar",
    "telefono" => "3134756915",
    "correo" => "contacto@tropicalice.com"
];

echo "Nombre del proveedor: " . $proveedor["nombre"];
echo "<br>";
echo "Ciudad: " . $proveedor["ciudad"];

echo "<br><br>";

echo "Quinto Ejercicio";
echo "<br>";
$producto = [
    "nombre" => "Televisor",
    "precio" => 1200000,
    "cantidad" => 3
];

$producto["precio"] = 1150000;
$producto["cantidad"] = 7;

$producto["categoria"] = "Electrodomésticos";


echo "Nombre: " . $producto["nombre"] . "<br>";
echo "Precio actualizado: " . $producto["precio"] . "<br>";
echo "Cantidad disponible: " . $producto["cantidad"] . "<br>";
echo "Categoría: " . $producto["categoria"];


echo "<br><br>";


echo "Sexto Ejercicio";



$marcas = ["HP", "Dell", "Lenovo"];

$marcas[] = "Asus";
$marcas[] = "Acer";

echo $marcas[0] . "<br>";
echo $marcas[1] . "<br>";
echo $marcas[2] . "<br>";
echo $marcas[3] . "<br>";
echo $marcas[4];


echo "<br><br>";
echo "Septimo Ejercicio";
echo "<br>";

$productos = [
    [
        "nombre" => "Mouse",
        "precio" => 35000,
        "cantidad" => 10
    ],
    [
        "nombre" => "Teclado",
        "precio" => 60000,
        "cantidad" => 5
    ],
    [
        "nombre" => "Monitor",
        "precio" => 450000,
        "cantidad" => 3
    ]
];

echo "Nombre del segundo producto: " . $productos[1]["nombre"] . "<br>";
echo "Precio del tercer producto: " . $productos[2]["precio"] . "<br>";
echo "Cantidad disponible del primero: " . $productos[0]["cantidad"];

echo "<br><br>";
echo "Octavo Ejercicio";
echo "<br>";

$aprendices = [
    [
        "nombre" => "bryan camilo murcia barahona",
        "ficha" => "3230905",
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Andrés lopez",
        "ficha" => "3230905",
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Valeria ardila",
        "ficha" => "3230905",
        "programa" => "ADSO"
    ]
];

echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"] . "<br>";
echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"];
?>