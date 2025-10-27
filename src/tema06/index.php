
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
require_once "Coche.php";

$coche = new Coche( 2024, "99992nhf");

var_dump($coche);
echo "<br/>";
$coche->setMarca("Citroen");

var_dump($coche);
echo "<br/>";

//$coche->motor = "diesel";

echo $coche->motor;







?>

</body>
</html>
