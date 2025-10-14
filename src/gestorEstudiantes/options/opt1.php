<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
    exit;
}


$lleno = $_GET ?? null;
$notas = isset($_GET["notas"]) ? explode(",", rtrim($_GET["notas"], ",")) : null;
$perfe = false;

if ($notas && count($notas) == 3):
    if (
            ($notas[0] >= 0 && $notas[0] < 11) &&
            ($notas[1] >= 0 && $notas[1] < 11) &&
            ($notas[2] >= 0 && $notas[2] < 11)
    ) {
        $perfe = true;
    }
endif;
    

if ($perfe):
    $media = array_sum($notas) / 3;
    $state = ($media >= 5) ? "aprobado" : "suspenso";

    $_SESSION["listado"][] = [
            "nombre" => $_GET["nombre"],
            "notas" => $notas,
            "promedio" => $media,
            "estado" => $state
    ];
    //array_push($_SESSION["listado"],$alumno);

    header("Location: ../menu.php");
    //exit(header("Location: ../menu.php"));
    exit;
endif;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">
                <li class="nav-item"><a class="nav-link" href="../menu.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Agregar usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="opt2.php">Mostrar usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="opt3.php">Buscar usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="opt4.php">Eliminar usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="opt5.php">Estadísticas</a></li>
                <li class="nav-item"><a class="nav-link" href="opt6.php">Borrar información</a></li>
                <li class="nav-item"><a class="nav-link" href="../cerrar.php">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <form method="get">
        <div class="row mt-3">
            <div class="col-3">
                <label for="nombre" class="form-label">Introduzca el nombre que desea agregar</label>
            </div>
            <div class="col-2">
                <input id="nombre" type="text" name="nombre"
                       value="<?= isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '' ?>"
                       required autofocus>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <label for="notas" class="form-label">Introduzca tres notas separadas por comas.</label>
            </div>
            <div class="col-2">
                <input id="notas" type="text" name="notas"
                       value="<?= isset($_GET['notas']) ? htmlspecialchars($_GET['notas']) : '' ?>"
                       required>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Agregar</button>

        <?php if ($lleno != null && !$perfe): ?>
            <div class="alert alert-danger mt-4" role="alert">
                 Error: Verifica que hayas ingresado exactamente tres notas separadas por comas
                y que cada una esté entre 0 y 10.
            </div>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
