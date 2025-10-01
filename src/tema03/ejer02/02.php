<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejer01/02</title>
</head>
<body>
<div class="container">
    <?php
    const PESETAS = 166;
    const DOLARES = 1.05;
    const LIBRA = 0.87;
    const YEN = 157.25;

    $resultado = match ($_POST["cambio"]) {
        "peseta" => $_POST["moneda"] * PESETAS,
        "dolares" => $_POST["moneda"] * DOLARES,
        "libra" => $_POST["moneda"] * LIBRA,
        "yen" => $_POST["moneda"] * YEN,

        default => 0
    };
    echo "<p>$resultado {$_POST["cambio"]}  </p>";
    ?>
</div>
</body>
</html>