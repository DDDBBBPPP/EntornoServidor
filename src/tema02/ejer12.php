<?php

$primero = true;

for ($i = 1; $i < 101; $i++):
    if (($i % 3) == 0):
        if (!$primero) {
            echo ", ";
        }
        echo $i;
        $primero = false;
    endif;
endfor;

?>