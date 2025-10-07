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
/**
 * @param int $num
 * @return bool
 * Devuelve true si el numero es capicua
 */
function esCapicua(int $num): bool
{
    $res = false;
    if (strval($num) == strrev($num)) {
        $res = true;
    }
    return $res;
}

var_dump(esCapicua(665566));


echo "<br>";
/**
 * @param $num
 * @return bool
 * Devuleve si un numero es primo
 */
function esPrimo($num): bool
{
    $cont = 2;
    while ($cont <= ($num / 2) and ($num % $cont) != 0):
        $cont++;
    endwhile;
    return $cont > ($num / 2);
}

var_dump(esPrimo(37));

echo "<br>";


function siguientePrimo(int $num): int
{
    do {
        $num++;
    } while (!esPrimo($num));

    return $num;
}

echo siguientePrimo(8);

echo "<br>";

/**
 * @param int|float $base
 * @param int $exp
 * @return int|float
 */
function potencia(int|float $base, int $exp): int|float
{
    return pow($base, $exp);
}

echo potencia(2, 3);
echo "<br>";

/**
 * @param int $a
 * @return int
 * Cuenta los digitos de un numero.
 */
function digitos(int $a): int
{
    $cont = 0;
    while ($a > 0):
        $a = intdiv($a, 10);
        $cont++;
    endwhile;
    return $cont;
}

echo digitos(434);
echo "<br>";

/**
 * @param int|float $num
 * @return int|float
 * Da la vuelta a un numero
 */
function voltea(int|float $num): int|float
{
    return strrev($num);
}

echo voltea(4321);
echo "<br>";

/**
 * @param int $num
 * @param int $pos
 * @return int
 * Te da el numero de la posicion indicada
 */
function digitoN(int $num, int $pos): int
{
    return ((string)$num)[$pos];

}

echo digitoN(45453412, 4);
echo "<br>";

/**
 * @param int $num
 * @param int $cant
 * @return int
 * Quita de la derecha numeros.
 */
function quitarDerecha(int $num, int $cant): int
{
    for($i=0;$i<$cant;$i++):

        $num = intdiv($num,10);

        endfor;

    return $num;
}

echo quitarDerecha(323238,4);
echo "<br>";


/**
* @param int $num
* @param int $cant
* @return int
 * Quita la cantidad de numeros que le digas por la izquierda.
 */
function quitarIzquierda(int $num, int $cant): int
{
    return substr((string)$num, $cant);
}


echo quitarIzquierda(234342,3);
echo "<br>";


/**
 * @param int $num
 * @param int $dig
 * @return int
 * Pega el digito que tu le des a un numero a la derecha.
 */
function pegaDerecha(int $num, int $dig): int
{
    return ($num* 10) + $dig;
}

echo pegaDerecha(45,6);
echo "<br>";



function pegaIzquierda(int $num, int $dig): int
{
    return voltea(pegaDerecha(voltea($num),$dig));

}

echo pegaIzquierda(345,6);
echo "<br>";
?>

</body>
</html>