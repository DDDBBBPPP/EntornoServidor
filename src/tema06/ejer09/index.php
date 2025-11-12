<?php
require_once "Producto.php";
session_start();
if(!isset($_SESSION["productos"]))$_SESSION["productos"] = []
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Alta producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reset.php">Resetea todo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <?php
        if (count($_SESSION["productos"]) == 0):?>
            <div class="alert alert-danger mt-4" role="alert">
                Empieza a guardar cosas padre
            </div>
        <?php else: ?>
            <table class="table table-bordered table-striped text-center align-middle"
                   style="table-layout: fixed; width: 100%;">
                <thead class="table-light">
                <tr>
                    <th class="text-center">Número</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Categoria</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SESSION["productos"] as $indice => $item):
                    $i = $indice + 1;
                    echo "<tr>";
                    echo "<td>{$i}: </td>";
                    echo "<td>{$item->nombre}</td>";
                    echo "<td>{$item->precio}</td>";
                    echo "<td>{$item->categoria}</td>";
                    echo "</tr>";
                endforeach;
                ?>
                </tbody>
            </table>
        <?php endif; ?>
</div>
</body>
</html>