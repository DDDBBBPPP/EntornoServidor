<?php

$numeros = [1,2,3,4,5];
 $aux = 0;

foreach ($numeros as $numero):
    $aux = $numero;
    $aux *= 2;;
    echo "{$aux} <br>";
endforeach;

?>