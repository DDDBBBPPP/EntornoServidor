<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}

if (!empty($_POST)):
    // 🔹 NUEVO: Lógica de búsqueda por nombre o categoría
    $busqueda = trim($_POST["a"]);
    $resultados = [];

    foreach ($_SESSION["productos"] as $item) {
        // Coincidencia exacta o parcial (sin distinguir mayúsculas)
        if (
                strcasecmp($item["nombre"] ?? '', $busqueda ?? '') == 0 ||
                strcasecmp($item["categoria"] ?? '', $busqueda ?? '') == 0 ||
                stripos($item["nombre"] ?? '', $busqueda ?? '') !== false ||
                stripos($item["categoria"] ?? '', $busqueda ?? '') !== false
        ) {
            $resultados[] = $item;
        }

    }

    // 🔹 Mostramos resultados directamente (sin redirección)
    ?>
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Resultados de búsqueda</title>
    </head>
    <body>
    <div class="container mt-3">
        <h3>🔍 Resultados para: <em><?= $busqueda ?></em></h3>
        <?php if (!empty($resultados)): ?>
            <table class="table table-striped mt-3">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($resultados as $item): ?>
                    <tr>
                        <td><?= $item["nombre"] ?></td>
                        <td><?= $item["precio"] ?></td>
                        <td><?= $item["cantidad"] ?></td>
                        <td><?= $item["categoria"] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning mt-3">
                No se encontraron productos que coincidan con "<strong><?= $busqueda ?></strong>".
            </div>
        <?php endif; ?>
        <a href="../menu.php" class="btn btn-primary mt-3">Volver al menú</a>
    </div>
    </body>
    </html>
    <?php
    exit;
else:
    ?>
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Buscar producto</title>
    </head>
    <body>
    <div class="container mt-3">
        <?php if (!empty($_SESSION["productos"])): ?>
            <form method="post">
                <div class="row mt-3">
                    <div class="col-2">
                        <label for="a" class="form-label">Buscar por nombre o categoría</label>
                    </div>
                    <div class="col-4">
                        <input id="a" type="text" name="a" required class="form-control"/>
                    </div>
                </div>
                <button class="btn btn-primary mt-3">Buscar</button>
            </form>
        <?php else: ?>
            <div class="container mt-4">
                <div class="alert alert-danger" role="alert">
                    No hay productos en el listado todavía.
                </div>
            </div>
        <?php endif; ?>

        <div class="row mt-3">
            <div class="col-2 d-flex align-items-center">
                <a href="../menu.php" class="btn btn-primary">Volver al menú</a>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php endif; ?>
