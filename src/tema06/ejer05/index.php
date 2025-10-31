<?php
require_once "SensorIoT.php";

$sensor = new SensorIoT("dfsdfsd","Colmenar","Agua",7);

var_dump($sensor);

echo "<br/>";

echo $sensor->mediaHistorial();
echo "<br/>";

echo $sensor->actualizarValor(23);
echo "<br/>";


echo $sensor->actualizarValor(7);
echo "<br/>";
echo $sensor->actualizarValor(10);
echo "<br/>";
echo $sensor->actualizarValor(10);
echo "<br/>";
echo $sensor->actualizarValor(5);
echo "<br/>";
echo $sensor->actualizarValor(5);
echo "<br/>";


echo $sensor->mediaHistorial();