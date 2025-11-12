<?php
session_start();
require_once "Persona.php";
if (!empty($_POST)):
    $pepe = new Persona($_POST["nombre"],$_POST["edad"],$_POST["sexo"]);
    $_SESSION["cadena"] = serialize($pepe);
    header("location:formulario.php");
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
    <form method="post">
        <div class="row mt-3">
            <div class="col-2">
                <label for="nombre" class="form-label">Introduzca el nombre</label>
            </div>
            <div class="col-2">
                <input id="nombre" type="text" name="nombre" required class="form-control" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="edad" class="form-label">Introduzca la edad</label>
            </div>
            <div class="col-2">
                <input id="edad" type="number" name="edad" required class="form-control" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="sexo" class="form-label">Introduzca el sexo</label>
            </div>
            <div class="col-2">
                <input id="sexo" type="text" name="sexo" required class="form-control" required/>
            </div>
        </div>
        <button class="btn btn-primary">Resuelve</button>
    </form>

    </body>
    </html>

<?php endif;