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
                Sesión: <strong><!-- aquí va el identificador de la sesión --></strong>
                · Última acción: <em><!-- aquí va la última acción realizada por el usuario --></em>
            </div>
        </div>

        <hr/>

        <form id="frmEjemplo" method="post">
            <div id="celda" class="borde-dashed">
                <label for="id">Nombre del campo</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input id="id" class="input" type="text" name="name" placeholder="Escribe un texto..."/>
                    <button id="btnEnviar">ENVIAR</button>
                </div>
            </div>
        </form>
        <hr/>
        <div id="foot" class="muted">
            <!-- aquí va tu nombre completo y grupo al que perteneces -->
        </div>
    </div>
</div>
</body>
</html>