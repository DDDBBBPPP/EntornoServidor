<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
if (!empty($_POST)):
    $i = $_SESSION["pos"];

    $_SESSION["productos"][$i]["precio"] = $_POST["precio"] ?? $_SESSION["productos"][$i]["precio"];
    $_SESSION["productos"][$i]["cantidad"] = $_POST["cantidad"] ?? $_SESSION["productos"][$i]["cantidad"];
    $_SESSION["productos"][$i]["categoria"] = $_POST["categoria"] ?? $_SESSION["productos"][$i]["categoria"];
    header("location:../menu.php");
    exit;
else: ?>

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
    <form action="opt5b.php" method="post">
        <div class="row mt-3">
            <div class="col-2">
                <label for="nombre" class="form-label">Introduzca el nombre del producto a actualizar</label>
            </div>
            <div class="col-2">
                <input id="nombre" type="text" name="nombre" required class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="info" class="form-label">Información</label>
            </div>
            <div class="col-10 d-flex flex-wrap align-items-center">
                <div class="form-check me-3">
                    <input id="precio" type="checkbox" name="precio" value="precio" class="form-check-input"/>
                    <label class="form-check-label" for="precio">Precio</label>
                </div>
                <div class="form-check me-3">
                    <input type="checkbox" name="cantidad" value="cantidad" class="form-check-input" id="cantidad"/>
                    <label class="form-check-label" for="cantidad">Cantidad(Uds)</label>
                </div>
                <div class="form-check me-3">
                    <input type="checkbox" name="categoria" value="categoria" class="form-check-input" id="categoria"/>
                    <label class="form-check-label" for="categoria">Categoria</label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>
 <?php endif; ?>