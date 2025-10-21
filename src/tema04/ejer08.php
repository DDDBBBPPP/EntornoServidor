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

//Biblioteca de funciones para arrays bidimensionales de numeros enteros


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


echo " EJERCICIO FILA ARRAY";

/**
 * @param array $tete
 * @param int $valor
 * @return array
 *Ejercicio filaArray
 */
function filaArray(array $tete, int $valor): ?array
{
    $encontrado = false;
    $fila = 0;
    $filas = count($tete);
    for ($i = 0; $i < $filas; $i++):
        for ($j = 0; $j < count($tete[$i]); $j++):
            if ($valor == $tete[$i][$j]):
                $encontrado = true;
                $fila = $i;
                $j = count($tete[$i]);
            endif;
        endfor;
        if ($encontrado) $i = $filas;
    endfor;

    return ($encontrado) ? $tete[$fila] : null;
}

$hola = generaArray(4, 4, 0, 10);
echo "<pre>" . print_r($hola, true) . "</pre>";
echo "<br>";
echo "<br>";
echo "<pre>" . var_dump(filaArray($hola, 6)) . "</pre>";
echo "<br>";


echo " EJERCICIO COLUMNA ARRAY";

/**
 * @param array $tete
 * @param int $valor
 * @return array
 *Ejercicio columna Array
 */
function columnaArray(array $tete, int $valor): ?array
{
    $encontrado = false;
    $columna = 0;
    $filas = count($tete);
    for ($i = 0; $i < $filas; $i++):
        for ($j = 0; $j < count($tete[$i]); $j++):
            if ($valor == $tete[$i][$j]):
                $encontrado = true;
                $columna = $j;
                $j = count($tete[$i]);
            endif;
        endfor;
        if ($encontrado) $i = $filas;
    endfor;
    $nuevo = [];

    for ($i = 0; $i <$filas; $i++):
        array_push($nuevo, $tete[$i][$columna]);
    endfor;

    return ($encontrado) ? $nuevo : null;
}

$hola = generaArray(4, 4, 0, 10);
echo "<pre>" . print_r($hola, true) . "</pre>";
echo "<br>";
echo "<pre>" . print_r(columnaArray($hola, 5), true) . "</pre>";
echo "<br>";

echo " EJERCICIO coordenada ARRAY";

/**
 * @param array $tete
 * @param int $valor
 * @return array
 *Ejercicio coordenada Array
 */
function coordenadaArray(array $tete, int $valor): ?array
{
    $encontrado = false;
    $columna = 0;
    $fila = 0;
    $filas = count($tete);
    for ($i = 0; $i < $filas; $i++):
        for ($j = 0; $j < count($tete[$i]); $j++):
            if ($valor == $tete[$i][$j]):
                $encontrado = true;
                $columna = $j;
                $fila = $i;
                $j = count($tete[$i]);
            endif;
        endfor;
        if ($encontrado) $i = $filas;
    endfor;
    $hey = [$fila,$columna];

    return ($encontrado) ? $hey: null;
}

$holas = generaArray(4, 4, 0, 10);
echo "<pre>" . print_r($holas, true) . "</pre>";
echo "<br>";
echo "<pre>" . print_r(coordenadaArray($holas, 5), true) . "</pre>";
echo "<br>";




echo "Ejercicio Punto De Silla";
echo "<br>";
echo "<br>";
echo "<br>";

function puntoDeSilla(array $tete, int $valor):bool
{
    $encontrado = false;
    $ffila = filaArray($tete,$valor);
    $fcolumna = columnaArray($tete,$valor);
    if(gettype($ffila)== gettype($tete)):
        if((min($ffila)== $valor) and (min($fcolumna)== $valor)):
                $encontrado = true;
            endif;
    endif;
    return $encontrado;
}
$holass = generaArray(4, 4, 0, 20);
echo "<pre>" . print_r($holass, true) . "</pre>";
echo "<br>";
echo "<pre>" . var_dump(puntoDeSilla($holass, 3)) . "</pre>";
echo "<br>";
?>

</body>
<table class="table table-bordered table-striped text-center align-middle" style="table-layout: fixed; width: 100%;">
    <thead class="table-light">
    <tr>
        <th class="text-center">Alumno</th>
        <th class="text-center">Notas</th>
        <th class="text-center">Promedio</th>
        <th class="text-center">Estado</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($_SESSION["listado"] as $item):
        echo "<tr>";
        echo "<td>{$item["nombre"]}</td>";
        echo "<td>" . implode(", ", $item["notas"]) . "</td>";
        echo "<td>{$item["promedio"]}</td>";
        echo "<td>{$item["estado"]}</td>";
        echo "</tr>";
    endforeach;
    ?>
    </tbody>
</table>
</html>
