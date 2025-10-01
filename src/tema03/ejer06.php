<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ecuación segundo grado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    if (!empty($_GET)):
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        $discriminante = (pow($b, 2) - (4.0 * (float)$a * (float)$c));
        $raiz = sqrt($discriminante);
        if ($discriminante > 0):
            $resA = (-$b + $raiz) / (2 * $a);
            $resB = (-$b - $raiz) / (2 * $a);
            echo "<p>Los posibles resultados son $resA y $resB</p>";
        else:
            echo "<p>No hay posible solución</p>";

        endif;
    else:
        ?>
        <form method="get">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="a" class="form-label">Introduzca la a</label>
                </div>
                <div class="col-2">


                    <input id="a" type="number" step="any" name="a"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label for="b" class="form-label">Introduzca la b</label>
                </div>
                <div class="col-2">


                    <input id="b" type="number" step="any" name="b"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label for="c" class="form-label">Introduzca la c</label>
                </div>
                <div class="col-2">


                    <input id="c" type="number" step="any" name="c"/>
                </div>
            </div>
            <br/>

            <button class="btn btn-primary">Resuelve</button>

        </form>

    <?php endif; ?>
</div>

</body>
</html>
