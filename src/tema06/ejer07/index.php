<?php
require_once "CuentaVerde.php";
require_once "CuentaEnergia.php";


$verde = new CuentaVerde("12345", "Luis");
//$energia = new CuentaEnergia("Abcde", "David");

var_dump($verde);
echo "<br/>";

$verde->generar(200);
echo $verde->saldo;
echo "<br/>";
$verde->consumir(150);
echo $verde;
echo "<br/>";
$verde->barrasBravas();








?>