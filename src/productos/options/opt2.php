<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
$valorTotal = 0;
$valorInv = 0;


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

    <?php
    if (empty($_SESSION["productos"])):?>
        <div class="container mt-4">
            <div class="alert alert-danger" role="alert">
                No hay productos en el listado todavía.
            </div>
        </div>
    <?php
    else:
        ?>
        <table class="table table-bordered table-striped text-center align-middle" style="width: 100%;">
            <thead class="table-light">
            <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Categoría</th>
                <th class="text-center">Valor total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $valorInv = 0;
            foreach($_SESSION["productos"] as $item):
                $valorTotal = ($item["precio"] ?? 0) * ($item["cantidad"] ?? 0);
                $valorInv += $valorTotal;
                echo "<tr>";
                echo "<td>" . htmlspecialchars($item["nombre"] ?? '') . "</td>";
                echo "<td>" . number_format((float)($item["precio"] ?? 0), 2) . "</td>";
                echo "<td>" . ($item["cantidad"] ?? 0) . "</td>";
                echo "<td>" . htmlspecialchars($item["categoria"] ?? '') . "</td>";
                echo "<td>" . number_format((float)$valorTotal, 2) . "</td>";
                echo "</tr>";
            endforeach;

            ?>
            </tbody>
            <tfoot class="table-secondary">
            <tr>
                <td colspan="4" class="text-end"><strong>Total inventario:</strong></td>
                <td><strong><?= number_format($valorInv, 2) ?></strong></td>
            </tr>
            </tfoot>
        </table>

    <?php endif;?>
        <div class="row mt-3">
        <div class="col-2 d-flex align-items-center">
            <a href="../menu.php" class="btn btn-primary">Volver al menú</a>
        </div>
    </div>
</div>
</body>
</html>