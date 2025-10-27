<?php
require_once "CuentaBancaria.php";


$cuenta = new CuentaBancaria(250,"David");

var_dump($cuenta);
echo "<br/>";


//Depositar
$cuenta->depositar("300");

var_dump($cuenta);
echo "<br/>";

//Retirar
var_dump($cuenta->retirar(420));
echo "<br/>";
$cuenta->retirar(420);
var_dump($cuenta);
echo "<br/>";
var_dump($cuenta->retirar(420));
echo "<br/>";

//Mostrar info de titular
echo $cuenta->titular;
echo "<br/>";

//Mostrar saldo.
echo $cuenta->saldo;
echo "<br/>";




