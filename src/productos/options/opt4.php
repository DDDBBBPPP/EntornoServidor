<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}

if (!empty($_POST)):
    foreach ($_SESSION["productos"] as $i => $item):
        if (strcasecmp($item["nombre"] ?? '', $_POST["nombre"] ?? '') == 0):
            unset($_SESSION["productos"][$i]);
            break;
        endif;
    endforeach;

    $_SESSION["productos"] = array_values($_SESSION["productos"]);


    header("location:../menu.php");
    exit;
else:
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="row mt-3">
            <div class="col-6">
                <label for="nombre" class="form-label">Introduzca el nombre del producto a eliminar</label>
            </div>
            <div class="col-2">
                <input id="nombre" type="text" name="nombre" required class="form-control"/>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Eliminar</button>
    </form>
</div>
<?php endif; ?>
</body>
</html>
