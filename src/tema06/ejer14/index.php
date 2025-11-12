<?php
require_once "CuentaBancaria.php";


$cuenta = new CuentaBancaria();


$cuenta->mostrarSaldo();
$cuenta->retirar(200);
$cuenta->mostrarSaldo();
$cuenta->depositar(25);
$cuenta->mostrarSaldo();
$cuenta->retirar(15);
$cuenta->mostrarSaldo();

