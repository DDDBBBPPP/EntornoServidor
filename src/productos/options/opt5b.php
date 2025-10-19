<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}

if (!empty($_POST)):
    $precio = $_POST["precio"]??null;

else: ?>

    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <form action="opt5.php" method="post">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="precio" class="form-label">Introduzca el precio</label>
                </div>
                <div class="col-2">
                    <input id="precio" type="number" step="any" name="precio" required class="form-control"/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="cantidad" class="form-label">Introduzca la cantidad</label>
                </div>
                <div class="col-2">
                    <input id="cantidad" type="number" step="1" name="cantidad" required class="form-control"/>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="categoria" class="form-label">Introduzca la categoria</label>
                </div>
                <div class="col-2">
                    <input id="categoria" type="text" name="categoria" required class="form-control"/>
                </div>
            </div>
            <button class="btn btn-primary">Resuelve</button>
        </form>
    </div>
    </body>
    </html>
<?php endif; ?>