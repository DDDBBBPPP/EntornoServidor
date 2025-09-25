<?php

$cont = 2;
$i = 2;

for (; $i <= 100; $i++):

    while ($cont <= ($i / 2) && ($i % $cont) != 0):

        $cont++;

    endwhile;

    if ($cont > ($i / 2)):

        echo "$i ";

    endif;
    $cont = 2;
endfor;
?>