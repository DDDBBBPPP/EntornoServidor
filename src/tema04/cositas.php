<?php
$numeros = [1,2,3,4,5,6,7,8,9,10];


function miFiltro(array $datos, $funcion){
    $otros = [];
    foreach ($datos as $item){

       ($funcion($item))?array_push($otros,$item):"";

    }
  return  $otros;
}







$pares = miFiltro($numeros, function($cha){

    return $cha%2 == 0;
});

print_r($pares);