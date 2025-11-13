<?php
require_once "ProductoAlimenticio.php";
require_once "ProductoElectronico.php";

$tablet = new ProductoElectronico("Pantalla",50.50,CategoriaProducto::ELECTRONICA->name);
var_dump($tablet);
echo "<br/>";

$tablet->aplicarDescuento(40);
echo $tablet->calcularImpuesto() . "<br/>";
$tablet->mostrarDetalles();

$tomate = new ProductoAlimenticio("Tomate",0.49,CategoriaProducto::ALIMENTOS->name);
var_dump($tomate);
echo "<br/>";

$tomate->aplicarDescuento(10);
echo $tomate->calcularImpuesto() . "<br/>";
$tomate->mostrarDetalles();