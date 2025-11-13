<?php
require_once "Administrador.php";
require_once "Cliente.php";


$cliente = new Cliente("David");
$admin = new Administrador("Rosario");

 echo Usuario::obtenerTotalUsuarios() . "<br/>";

 $cliente->autenticar();
 $cliente->acceder();
 $cliente->cerrarSesion();
 $admin->autenticar();
 $admin->acceder();
 $admin->cerrarSesion();