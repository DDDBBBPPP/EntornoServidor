<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejer01/01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <form action="02B.php" method="post">
        <br/>

        <div class="row mt-4">
            <div class="col-12">
                <label for="moneda" class="form-label">Introduce los euros a convertir</label>
                <input id="moneda" type="number" step="any" name="moneda" class="form-control" autofocus required>
            </div>
        </div>

        <!-- EL STEP ANY ES PARA QUE PERMITA DECIMALES -->
        <div class="row mt-3">
            <div class="col-12">
                <label for="hola" class="form-label">Selecciona la moneda</label>
                <select id="hola" name="cambio" class="form-select">
                    <option value="peseta">Peseta</option>
                    <option value="dolares">Dólares</option>
                    <option value="libra">Libra esterlina</option>
                    <option value="yen">Yen Japonés</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <button class="btn btn-dark" type="submit">Cambiar</button>
            </div>
        </div>

    </form>

</div>
</body>
</html>
