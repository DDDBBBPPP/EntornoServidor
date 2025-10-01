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

    else:
        ?>
        <form method="get">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="num" class="form-label">Introduzca el numero para hacer la tabla</label>
                </div>
                <div class="col-2">


                    <input id="num" type="number" name="num"/>
                </div>
            </div>
            <br/>

            <br/>

            <button class="btn btn-primary">Resuelve</button>

        </form>

    <?php endif; ?>
</div>

</body>
</html>
