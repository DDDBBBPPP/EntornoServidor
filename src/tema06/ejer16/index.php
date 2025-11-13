<?php
require_once "Reporte.php";


$factura = new Reporte();

$factura->versionar();
$factura->guardar();
$factura->imprimir();
