<?php
require_once "auth.php";

// recuperamos el usuario completo guardado en sesión
$usuario = $_SESSION["usuario"];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor Hotelero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        Tu usuario: <b><?= htmlspecialchars($usuario["nombre"]) ?></b>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="cerrar.php">
                        Cerrar Sesión
                    </a>
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
