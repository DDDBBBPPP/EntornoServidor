<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Ejer01/02</title>
</head>
<body>
<div class="container">
    <?php
    $resultado =  match($_POST["cambio"]) {
        "peseta" => $_POST["moneda"] * 166,
        "dolares" => $_POST["moneda"] * 1.05,
        "libra" => $_POST["moneda"] * 0.87,
        "yen" => $_POST["moneda"] * 157.25,

        default => 0
    };
    echo "<p>$resultado {$_POST["cambio"]}  </p>";
    ?>
</div>
</body>
</html>