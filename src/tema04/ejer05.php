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

// Definimos una constante
const MULTIPLICADOR = 5;

// Definimos un cierre que usa la constante
$multiplicarPorConstante = function($numero) {
    return $numero * MULTIPLICADOR;
};

// Probamos el cierre con un valor
$resultado = $multiplicarPorConstante(10);

echo "El resultado es: $resultado";

?>

</body>
</html>