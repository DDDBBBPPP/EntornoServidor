<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejer01/02</title>
</head>
<body>
<div class="container">
    <?php
    const FACTORES = [166.386,1.05,0.87,157.35];

    #Informaci´pm
    $divisa = (int) $_POST["cambio"];
    $euros = $_POST["moneda"];

 # count(array) Cuenta sus elementos.

    # realizamos la conversión

    $resultado = $euros * FACTORES[$divisa];
    echo "<p>$resultado {$_POST["cambio"]}  </p>";
    ?>
</div>
</body>
</html>