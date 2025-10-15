<?php


$puntuacion = 48;

echo match($puntuacion >=0) {
   // $puntuacion<0 => "El valor es erróneo",
    $cambio["peseta"] => "Novato",
    $puntuacion<70  =>  "Intermedio",
    $puntuacion<90  =>  "Avanzado",
    $puntuacion<101 =>  "Excelente",
    default         => "El valor es erróneo"


};
