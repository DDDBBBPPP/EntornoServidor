<?php
session_start();


?>


<!doctype html>
<html lang="es">
<head>
    <title>🎮 GAME LIBRARY V1.0</title>
    <meta charset="utf-8"/>
    <link id="retrocss" rel="stylesheet" href="../css/retro.css"/>
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

        <!--
              Aquí va el
              MENÚ DE OPCIONES
        -->
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
