<?php
session_start() ;
if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
    exit;
}
$_SESSION["listado"] = [];
header("Location: ../menu.php");
exit;

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
                <li class="nav-item">
                    <a class="nav-link" href="../menu.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt1.php">Agregar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt2.php">Mostrar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt3.php">Buscar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt4.php">Eliminar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt5.php">Estadísticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Borrar información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cerrar.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
