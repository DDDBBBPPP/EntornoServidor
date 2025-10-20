<?php
session_start();

if (!isset($_SESSION["productos"])) {
    $_SESSION["productos"] = [];
}
$existe = false;
$referencia = -1;
foreach ($_SESSION["productos"] as $i => $item) {
    if (($item["nombre"] == $_POST["nombre"]) and !$existe){
        $existe = true;
        $referencia = $i;
    }
}
$_SESSION["pos"] = $existe ? $referencia : null;

if($_SESSION["pos"]==null):
    header("location:opt5c.php");
exit;
else:

    $precio = $_POST["precio"]??null;
    $cantidad = $_POST["cantidad"]??null;
    $categoria = $_POST["categoria"]??null;
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
        <form action="opt5.php" method="post">
            <div class="row mt-3">
                <div class="col-2">
                    <h3>Introduzca los datos a cambiar.</h3>
                </div>

            </div>
            <?php if($precio!=null): ?>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="precio" class="form-label">Introduzca el precio</label>
                </div>
                <div class="col-2">
                    <input id="precio" type="number" step="any" name="precio" required class="form-control"/>
                </div>
            </div>
            <?php endif;
            if ($cantidad != null):
            ?>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="cantidad" class="form-label">Introduzca la cantidad</label>
                </div>
                <div class="col-2">
                    <input id="cantidad" type="number" step="1" name="cantidad" required class="form-control"/>
                </div>
            </div>
            <?php endif;
            if ($categoria != null):
            ?>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="categoria" class="form-label">Introduzca la categoria</label>
                </div>
                <div class="col-2">
                    <input id="categoria" type="text" name="categoria" required class="form-control"/>
                </div>
            </div>
            <?php endif; ?>
            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </body>
    </html>
<?php endif; ?>