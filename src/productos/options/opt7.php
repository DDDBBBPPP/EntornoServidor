<?php
session_start();


if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
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
    $totalProductos = 0;
    $valorTotal = 0;
    $precioPromedio = 0;
    $mayorStock = "";
    $menorStock = "";
    $categoriaMasFrecuente = "";

    $stockMax = null;
    $stockMin = null;
    $categorias = [];

    foreach ($_SESSION["productos"] as $item):
        $totalProductos++;
        $valorTotal += $item["precio"] * $item["cantidad"];
        $precioPromedio += $item["precio"];

        if ($stockMax === null || $item["cantidad"] > $stockMax) {
            $stockMax = $item["cantidad"];
            $mayorStock = $item["nombre"];
        }

        if ($stockMin === null || $item["cantidad"] < $stockMin) {
            $stockMin = $item["cantidad"];
            $menorStock = $item["nombre"];
        }

        $categorias[$item["categoria"]] = ($categorias[$item["categoria"]] ?? 0) + 1;
    endforeach;


    $precioPromedio = $totalProductos > 0 ? $precioPromedio / $totalProductos : 0;

    if (!empty($categorias)) {
        arsort($categorias);
        $categoriaMasFrecuente = array_key_first($categorias);
    }
        ?>
        <table class="table table-bordered table-striped text-center align-middle" style="table-layout: fixed; width: 100%;">
            <thead class="table-light">
            <tr>
                <th class="text-center">Total Productos</th>
                <th class="text-center">Valor Total</th>
                <th class="text-center">Precio Promedio</th>
                <th class="text-center">Mayor Stock</th>
                <th class="text-center">Menor Stock</th>
                <th class="text-center">Mejor Categoría</th>
            </tr>
            </thead>
            <tbody>
            <?php
                echo "<tr>";
                echo "<td>{$totalProductos}</td>";
                echo "<td>". number_format($valorTotal, 2)." </td>";
                echo "<td>". number_format($precioPromedio, 2) . "</td>";
                echo "<td>" . htmlspecialchars($mayorStock) ."</td>";
                echo "<td>". htmlspecialchars($menorStock) ."</td>";
                echo "<td>". htmlspecialchars($categoriaMasFrecuente) ."</td>";
                echo "</tr>";
            ?>
            </tbody>
        </table>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-2 d-flex align-items-center">
            <a href="../menu.php" class="btn btn-primary">Volver al menú</a>
        </div>
    </div>
</div>
</body>
</html>
