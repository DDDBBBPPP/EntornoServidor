<?php

$usado = false;

for ($i = 1; $i < 101; $i++):
    $usado = false ;
    if (($i % 3) == 0):
        echo "$i";
        $usado = true;
    endif;
    if($usado== true) echo ", ";

endfor;


?>