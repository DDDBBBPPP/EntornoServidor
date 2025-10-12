<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../login.php");
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
                    <a class="nav-link active" aria-current="page" href="#">Estadísticas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt6.php">Borrar información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cerrar.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container padre">
    <?php
    $longitud = 0;
    $aprobado = 0;
    $suspenso = 0;
    $promedio = 0;
    if (isset($_SESSION["listado"])):
        $lista = $_SESSION["listado"];
        $longitud = count($lista);
        if ($longitud != 0):
            foreach ($lista as $item):
                $promedio += $item["promedio"];
                if ($item["estado"] == "aprobado"):
                    $aprobado++;
                endif;
            endforeach;
            $promedio = $promedio/$longitud;
            $aprobado = ($aprobado/$longitud) * 100;
            $suspenso = 100 - $aprobado;

        endif;
    endif;
    ?>
    <h2><span style="color:blue"><?= $_SESSION["usuario"] ?></span>, aquí tiene sus Estadísticas Generales</h2>
    <h5>Total de estudiantes</h5>
    <p>Total:<?=$longitud?>
    </p>
    <h5>Promedio general del grupo</h5>
    <p>Promedio general: <?=$promedio?>
    </p>
    <h5>Porcentaje de aprobados</h5>
    <p>Porcentaje de aprobados: <?=$aprobado?>%
    </p>
    <h5>Porcentaje de suspensos</h5>
    <p>Porcentaje de suspensos: <?=$suspenso?>%
    </p>

</div>
</body>
</html>