<?php
require_once "Producto.php";
require_once "Categoria.php";
session_start();


if(!empty($_POST)):

    $producto = new Producto($_POST["nombre"],$_POST["precio"],$_POST["categoria"]);
    $_SESSION["productos"][] = $producto;

    header("location:index.php");
else:?>

<!doctype html>
<html lang="e">
<head>
    <meta charset="UTF-8">
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
                    <a class="nav-link"  href="index.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Alta producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reset.php">Resetea todo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <form method="post">
        <!-- Nombre  -->
        <div class="row mt-3">
            <div class="col-2">
                <label for="nombre" class="form-label">Introduzca el nombre del producto</label>
            </div>
            <div class="col-2">
                <input id="nombre" type="text" name="nombre" required class="form-control"/>
            </div>
        </div>

        <!-- Precio  -->
        <div class="row mt-3">
            <div class="col-2">
                <label for="a" class="form-label">Introduzca el precio</label>
            </div>
            <div class="col-2">
                <input id="precio" type="number" step="any" name="precio" required class="form-control"/>
            </div>
        </div>
        <!-- Categoria  -->
                    <div class="row mt-3">
                        <div class="col-2">
                            <label for="categoria" class="form-label">Categoria</label>
                        </div>
                        <div class="col-3">
                            <select id="categoria" name="categoria"  class="form-select" required>
                                <?php
                                    foreach (Categoria::cases() as $item):?>
                                        <option value="<?=$item->value?>"><?=$item->name?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
        <button class="btn btn-primary">Almacenar</button>
    </form>
</div>
</body>
</html>
<?php endif; ?>
