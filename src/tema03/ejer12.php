<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Digito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php if (!empty($_POST)):
        $numero = (int)$_POST["num"];

        $reves = 0;
        $aux = 0;
        $contador = 0;
        $posiciones = [];

        while ($numero > 0):
            $reves = ($reves * 10) + $numero % 10;
            $numero = intdiv($numero, 10);
            $contador++;
        endwhile;
        for ($i = 1; $i <= $contador; $i++):
            if ($reves == 0):
                $aux *= 10;
            else:
                $aux = ($aux * 10) + $reves % 10;
                $reves = intdiv($reves, 10);
            endif;

            if ($aux % 10 == $_POST["dig"]) $posiciones[] = $i;

        endfor;

        echo "El dígito {$_POST["dig"]} se encuentra en la posición/es ";

        foreach ($posiciones as $item) {
            echo "$item ";
        }
    else: ?>
    <form method="post">
        <div class="row-3">
            <div class="col-2">
                <label for="num" class="form-label">Introduzca el número</label>
            </div>
            <div class="col-2">
                <input id="num" type="number" name="num"/>
            </div>
        </div>
        <div class="row-3">
            <div class="col-2">
                <label for="dig" class="form-label">Introduzca el digito</label>
            </div>
            <div class="col-2">
                <input id="dig" type="number" name="dig"/>
            </div>
        </div>

        <button class="btn btn-secondary mt-3">Dalee</button>

    </form>

</div>
<?php endif; ?>
</body>
</html>