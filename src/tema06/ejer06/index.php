<?php

require_once "TarjetaMetro.php";


$card = new TarjetaMetro("34fdsfsdf4","anciano");

var_dump($card);
echo "<br/>";

// RECARGAMOS
$card->recargar(35);
var_dump($card->getSaldo());
echo "<br/>";


//VIAJAMOS
echo $card->viajar(20);
echo "<br/>";


// OTRA VEZ PERO PASAMOS LIMITE.
var_dump($card->viajar(20));
echo "<br/>";

var_dump($card);
echo "<br/>";

echo($card->viajar(5));
echo "<br/>";

// Ahora quitamos de activo de la tarjeta, y aun con saldo, no nos deja.

$card->activo = false;
var_dump($card->viajar(5));
echo "<br/>";
