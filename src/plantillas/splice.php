<?php

$frutas = ["manzana", "banana", "cereza", "durazno", "kiwi"];

// Eliminar 2 elementos a partir del índice 1
array_splice($frutas, 1, 2);

print_r($frutas);
?>
Array
(
[0] => manzana
[1] => durazno
[2] => kiwi
)


<?php
$frutas = ["manzana", "banana", "cereza", "durazno"];

// Reemplazar "banana" y "cereza" por "pera" y "uva"
array_splice($frutas, 1, 2, ["pera", "uva"]);

print_r($frutas);
?>
Array
(
[0] => manzana
[1] => pera
[2] => uva
[3] => durazno
)
