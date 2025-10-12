<?php
session_start();

if (isset($_POST["usuario"])) $_SESSION["usuario"] = $_POST["usuario"];

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .padre > * {
            text-align: center;
            margin-top: 1rem;
        }

        h5 {
            color: blue;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-around">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt1.php">Agregar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt2.php">Mostrar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt3.php">Buscar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt4.php">Eliminar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt5.php">Estadísticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./options/opt6.php">Borrar información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container padre">
    <h2>Buenas <span style="color:blue"><?= $_SESSION["usuario"] ?></span>, elija una de las opciones</h2>
    <h5>Agregar un nuevo estudiante</h5>
    <p>Se solicitará nombre y 3 notas separadas por comas. Se comprobará que las
        notas sean entre 0 y 10. Si no se hace correctamente, se indicará con un mensaje de error.
    </p>
    <h5>Mostrar lista completa de estudiantes</h5>
    <p>Muestra <b>nombre, notas, promedio y estado</b>(aprobado/suspenso) de todo el alumnado.
        En forma de tabla. Si no hay datos, se indicará.
    </p>
    <h5>Buscar estudiante por nombre</h5>
    <p>Se solicita al usuario el nombre y se buscará. O se entrega o mensaje
    </p>
    <h5>Eliminar estudiante</h5>
    <p>Se solicita al usuario el nombre y se elimina si existe
    </p>
    <h5>Mostrar estadísticas generales</h5>
    <p>Total de estudiantes, promedio, y porcentaje de aprobados y suspensos.
    </p>
    <h5>Borrar información</h5>
    <p>Elimina todos los datos y se vuelve al menú
    </p>

</div>
</body>
</html>
