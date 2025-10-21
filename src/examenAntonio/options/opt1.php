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
        <table class="table table-bordered table-striped text-center align-middle" style="table-layout: fixed; width: 100%;">
            <thead>
            <tr>
                <th class="text-center">Código    |</th>
                <th class="text-center">Título     |</th>
                <th class="text-center">Desarrollador  |</th>
                <th class="text-center">Plat  |</th>
                <th class="text-center">Formato  |</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($_SESSION["videojuegos"] as $item):
                echo "<tr>";
                echo "<td>{$item["codigo"]}</td>";
                echo "<td>{$item["titulo"]}</td>";
                echo "<td>{$item["desarrollador"]}</td>";
                echo "<td>{$item["plataforma"]}</td>";
                echo "<td>{$item["formato"]}</td>";
                echo "</tr>";
            endforeach;
            $_SESSION["accion"] = "Listar";
            ?>
            </tbody>
        </table>
        <div class="row mt-3">
            <a href="../index.php" class="link"><b><-- Volver al menú</b></a>
        </div>




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
