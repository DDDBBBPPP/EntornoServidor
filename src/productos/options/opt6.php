<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}

if (!empty($_POST)) {
    if (empty($_SESSION["productos"])) {
        echo "<div class='alert alert-danger m-4'>No hay productos para ordenar.</div>";
    } else {
        // Obtener filtro y orden
        $filtro = $_POST["filtro"];
        $orden = $_POST["orden"];

        // Ordenar los productos
        usort($_SESSION["productos"], function ($a, $b) use ($filtro, $orden) {
            $resultado = ($a[$filtro] <=> $b[$filtro]);
            return ($orden === "asc") ? $resultado : -$resultado;
        });

        header("location:../menu.php");
        exit;
    }
} else {
    ?>
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ordenar productos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
              crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-4">
        <form method="post">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="filtro" class="form-label">Ordenar por:</label>
                </div>
                <div class="col-3">
                    <select id="filtro" name="filtro" class="form-select" required>
                        <option value="precio">Precio</option>
                        <option value="cantidad">Cantidad</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="orden" class="form-label">Orden</label>
                </div>
                <div class="col-3">
                    <select id="orden" name="orden" class="form-select" required>
                        <option value="asc">Ascendente</option>
                        <option value="desc">Descendente</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary mt-3">Ordenar</button>
        </form>
    </div>
    </body>
    </html>
<?php } ?>
