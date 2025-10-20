<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
$correcto = false;
if(!empty($_POST)):
    $correcto = (is_numeric($_POST["precio"]) && $_POST["precio"] >= 0 &&
            is_numeric($_POST["cantidad"]) && $_POST["cantidad"] >= 0);

    if($correcto):
    $_SESSION["productos"][] = [
        "nombre" => $_POST["nombre"],
        "precio" => $_POST["precio"],
        "cantidad" => $_POST["cantidad"],
        "categoria" => $_POST["categoria"]
    ];
    header("location:../menu.php");
    exit;
    endif;

    else:
    ?>
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <form method="post">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="nombre" class="form-label">Introduzca el nombre</label>
                </div>
                <div class="col-2">
                    <input id="nombre" type="text" name="nombre" required class="form-control"/>
                </div>
            </div>
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
            <button class="btn btn-primary">Agregar</button>
            <?php if (!empty($_POST) and !$correcto): ?>
                <div class="alert alert-danger mt-4" role="alert">
                    Error: Error: Verifica que el precio y la cantidad sean números válidos mayores o iguales a 0.

                </div>
            <?php endif; ?>
        </form>

    </div>

    </body>
    </html>
<?php endif; ?>