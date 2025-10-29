<?php
require_once "Pelicula.php";

$miPeli = new Pelicula("423432435","SuperPeli", "Yo", 1923, 12);

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
echo $miPeli->infoCorta();
echo "<br/>";


//$miPeli->stock = 23;