<?php
require_once "Persona.php";
session_start();

if (!empty($_POST)):
    //Vuelta a empezar.
    $objeto = $_SESSION["cadena"];

    unserialize($objeto);

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
        <?= $_SESSION["cadena"]?>
        <button class="btn btn-primary">Resuelve</button>
    </form>

    </body>
    </html>

<?php endif;





?>