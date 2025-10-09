<?php
function generaArray(int $n, int $m, int $min, int $max): array
{
    $tete = [[]];
    for ($i = 0; $i < $n; $i++):
        for ($j = 0; $j < $m; $j++):

            $tete[$i][$j] = rand($min, $max);
        endfor;
    endfor;
    return $tete;
}
$hola = generaArray(4,4,0,100);
function pintaArray(array $tete): void
{
    for ($i = 0; $i < count($tete); $i++):
        for ($j = 0; $j < count($tete[$i]); $j++):
            echo "{$tete[$i][$j]}  ";
        endfor;
        echo "<br>";
        echo "<br>";
    endfor;
}
echo "<pre>".print_r($hola). "</pre>";
echo pintaArray($hola);


?>