<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php

$numeros = [1, 2, 5, 6, 334, 23, 3443, -45, 21, 768, 456, 742, 4542];

/**
 * @param int $cant
 * @param int $min
 * @param int $max
 * @return array
 * Genera un array a partir de instrucciones
 */
function generaArray(int $cant, int $min, int $max): array
{
    $hola = [];
    for ($i = 0; $i < $cant; $i++):
        $hola[] = rand($min, $max);
    endfor;

    return $hola;
}

print_r(generaArray(8, 0, 6));

echo "<br>";
echo "<br>";
echo "<br>";

/**
 * @param array $tete
 * @return array
 * Minimo de un array
 */
function minimoArray(array $tete): int
{

    return min($tete);
}

echo minimoArray($numeros);

echo "<br>";
echo "<br>";
echo "<br>";


/**
 * @param array $tete
 * @return array
 * DEevuelve el máximo de un array
 */
function maximoArray(array $tete): int
{

    return max($tete);
}

echo maximoArray($numeros);

echo "<br>";
echo "<br>";
echo "<br>";

/**
 * @param array $nums
 * @return array|float|int
 * La media de los valores del array
 */
function mediaArray(array $nums): int|float
{
    if (count($nums) === 0) {
        return 0; // Evitar división entre cero
    }
    return array_sum($nums) / count($nums);
}

echo mediaArray($numeros);

echo "<br>";
echo "<br>";
echo "<br>";


function estaEnArray(array $tete, int $pos): bool
{
    return in_array($pos, $tete);

}

var_dump(estaenArray($numeros, 367));

echo "<br>";
echo "<br>";
echo "<br>";


function posicionEnArray(array $tete, int $pos): int | false
{
    return array_search($pos,$tete);
}

var_dump(posicionEnArray($numeros, 5));

echo "<br>";
echo "<br>";
echo "<br>";

function rotarDerecha(array $tete, int $cant): array
{
    for (; $cant > 0; $cant--):

        array_unshift($tete,null);
    endfor;
    return $tete;
}
var_dump($numeros);
echo"<br>";
var_dump(rotarDerecha($numeros, 3));

echo "<br>";
echo "<br>";
echo "<br>";

function rotarIzquierda(array $tete, int $cant): array
{
    for (; $cant > 0; $cant--):

        array_shift($tete);
    endfor;
    return $tete;
}
var_dump($numeros);
echo"<br>";

var_dump(rotarIzquierda($numeros, 3));

echo "<br>";
echo "<br>";
echo "<br>";
?>

</body>

</html>
