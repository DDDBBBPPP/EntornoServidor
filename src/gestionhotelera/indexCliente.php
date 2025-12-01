<?php
require_once "auth.php";
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor Hotelero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Tu usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5 text-center">
    <h2>Bienvenido al Gestor Hotelero</h2>
    <p>Selecciona una opción para continuar:</p>
</div>
</body>
</html>
