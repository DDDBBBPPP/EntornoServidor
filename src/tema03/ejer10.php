<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pirámide básica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <?php if (!empty($_GET)):
        $altura = $_GET["altura"];
        $car = $_GET["caracter"];
        $espacio = " ";
        if ($altura > 0):
            echo "<pre>";
            for ($i = 1; $i <= $altura; $i++):
                for ($j = 0; $j < ($altura - $i); $j++):
                    echo " "; // OTRA OPCION ES PONER AQUI $nbsp, que no quita los espacios.
                endfor;
                for ($j = 0; $j < ($i * 2 - 1); $j++):
                    echo "$car";
                endfor;
                echo "\n";
            endfor;
            echo "</pre>";

        else:
            echo "No se puede pintar si no tiene altura";
        endif;
    else: ?>

        <form method="get">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="altura" class="form-label">Introduzca el altura de la pirámide</label>
                </div>
                <div class="col-2">
                    <input id="altura" type="number" name="altura"/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="caracter" class="form-label">Introduzca el carácter de pintado</label>
                </div>
                <div class="col-2">
                    <input id="caracter" type="text" name="caracter"/>
                </div>
            </div>
            <br/>

            <button class="btn btn-primary">PINTA</button>

        </form>

    <?php endif; ?>
</div>

</body>
</html>
