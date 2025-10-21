<?php
session_start();

$duplicado = false;
$alerta = false;
if (!empty($_POST)):
foreach ($_SESSION["videojuegos"] as $item):
    if ($_POST["codigo"] == $item["codigo"]):
        $duplicado = true;
    endif;
endforeach;
if (!$duplicado):
    $nuevo = [
            "titulo" => $_POST["titulo"],
            "desarrollador" => $_POST["desarrollador"],
            "codigo" => $_POST["codigo"],
            "descripcion" => $_POST["descripcion"],
            "formato" => $_POST["formato"],
            "plataforma" => $_POST["plataforma"]
    ];

    array_push($_SESSION["videojuegos"], $nuevo);
    $_SESSION["accion"] = "Añadir";
    header("Location: ../index.php");
    exit;
else:
    $alerta = true;
endif;
endif;
if (empty($_POST) or $alerta):
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
                · Última acción: <em><?php echo $_SESSION["accion"] ?? "Todavía nada"; ?></em>
            </div>
        </div>

        <hr/>

        <form method="post">
            <div id="celda" class="borde-dashed">
                <label for="codigo">Código</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="codigo" class="input" type="text" name="codigo" placeholder="Tete123C" autofocus
                           required/>
                </div>
            </div>
            <div id="celda" class="borde-dashed">
                <label for="titulo">Título</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="titulo" class="input" type="text" name="titulo" required/>
                </div>
            </div>
            <div id="celda" class="borde-dashed">
                <label for="desarrollador">Desarrollador</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="desarrollador" class="input" type="text" name="desarrollador" required"/>
                </div>
            </div>
            <div id="celda" class="borde-dashed">
                <label for="plataforma">Plataforma</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="plataforma" class="input" type="text" name="plataforma" required/>
                </div>
            </div>
            <div id="celda" class="borde-dashed">
                <div class="row mt-3">
                    <div class="col-2">
                        <label for="formato" class="form-label">Formato</label>
                    </div>
                    <div class="col-3">
                        <select id="formato" name="formato" class="form-select" required>
                            <option value="fisico">Físico</option>
                            <option value="digital">Digital</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="celda" class="borde-dashed">
                <label for="descripcion">Descripción</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="descripcion" class="input" type="text" name="descripcion" required/>
                </div>
            </div>
            <button id="btnEnviar"><-- Añadir></button>
        </form>
<?php if($alerta):
    ?>
        <div class="alert alert-danger mt-4" role="alert">
            Error: Código duplicado.
        </div>

    <?php endif;
    ?>
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