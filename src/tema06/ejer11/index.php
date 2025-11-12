<?php
require_once "Telefono.php";
require_once"Computadora.php";

$movil = new Telefono();
$ordenador = new Computadora();

echo $movil->encender();
echo $ordenador->encender();