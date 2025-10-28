<?php
require_once "Pelicula.php";

$miPeli = new Pelicula("SuperPeli","12312312", "Yo", 1923, 12);

echo $miPeli->infoCorta();
echo "<br/>";
var_dump($miPeli->stock);
echo "<br/>";
$miPeli->reponer();
var_dump($miPeli->stock);
echo "<br/>";
$miPeli->vender(6);
var_dump($miPeli->stock);
echo "<br/>";

//$miPeli->stock = 23;