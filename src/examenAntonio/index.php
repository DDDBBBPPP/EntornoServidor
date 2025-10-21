<?php
session_start();
require_once "datos.php";

if(empty($_SESSION)):
$_SESSION["videojuegos"]= $videojuegos;
$_SESSION["accion"] = null;
endif;
?>+


<!doctype html>
<html lang="es">
<head>
    <title>🎮 GAME LIBRARY V1.0</title>
    <meta charset="utf-8"/>
    <link id="retrocss" rel="stylesheet" href="css/retro.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div id="wrap" class="wrap">
    <div id="term" class="terminal">
        <div id="hdr" class="hdr scanline">
            <pre>🎮  GAME LIBRARY V1.0</pre>
            <div id="status" class="muted">
                Sesión: <strong><?php echo session_id() ?></strong>
                · Última acción: <em><?php echo$_SESSION["accion"]?? "Todavía nada";  ?></em>
            </div>
        </div>
        <hr/>

            <a href="./options/opt1.php" class="link row" ><b>1. Listar Catálogo Completo</b></a>
            <a href="./options/opt2.php" class="link row"><b>2. Filtrar videojuegos (desarrollador / plataforma / ambos)</b></a>
            <a href="./options/opt3.php" class="link row"><b>3. Añadir videojuego</b></a>
            <a href="./options/opt4.php" class="link row"><b>4. Borrar videojuego</b></a>
            <a href="./options/opt5.php" class="link row"><b>5. Reiniciar aplicación</b></a>


        <hr/>

        <div id="foot" class="muted">
            <!-- aquí va tu nombre completo y grupo al que perteneces -->
            <p>Desarrollado por: David Bellón Payer</p>
            <p>Grupo: 2DAW Mañana</p>
        </div>
    </div>
</div>
</body>
</html>
<?php
$_SESSION["accion"] = "Menú.";
?>
