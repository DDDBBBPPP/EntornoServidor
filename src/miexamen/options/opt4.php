<?php
session_start();


if (!empty($_POST)):
    foreach ($_SESSION["videojuegos"] as $i => $item):
        if ($_POST["codigo"] == $item["codigo"]):
           // unset($item[$i]);
           array_splice($_SESSION["videojuegos"], $i, 1);
        endif;
    endforeach;
    //$_SESSION["videojuegos"] = array_values($_SESSION["videojuegos"]);
    $_SESSION["accion"] = "Borrar";
    header("Location: ../formulario.php");
    exit;
else:
    ?>


    <!doctype html>
    <html lang="es">
    <head>
        <title>🎮 GAME LIBRARY V1.0</title>
        <meta charset="utf-8"/>
        <link id="retrocss" rel="stylesheet" href="../css/retro.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
              crossorigin="anonymous">
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

            <form method="post">
                <div id="celda" class="borde-dashed">
                    <label for="codigo">Nombre del campo</label>
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <input id="codigo" class="input" type="text" name="codigo" placeholder="Código existente"
                               autofocus required/>
                        <button id="btnEnviar"><-- BORRAR</button>
                    </div>
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <input id="aficiones" type="checkbox" name="confirmacion" value="confirmacion" required/>
                        <label for="aficiones">Confirmo que deseo borrar este juego </label>
                    </div>
                </div>
            </form>
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
<?php endif; ?>
