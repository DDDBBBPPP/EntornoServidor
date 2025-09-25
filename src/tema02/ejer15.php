<?php

$persona = ["nombre"=>"David","edad"=>20,"ciudad"=>"Málaga"];

foreach($persona as $nombre => $edad):

    echo "$nombre: {$edad} <br>";

endforeach;