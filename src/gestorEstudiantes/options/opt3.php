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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li class="nav-item"><a class="nav-link" href="opt1.php">Agregar usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="opt2.php">Mostrar usuario</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Buscar usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="opt4.php">Eliminar usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="opt5.php">Estadísticas</a></li>
                <li class="nav-item"><a class="nav-link" href="opt6.php">Borrar información</a></li>
                <li class="nav-item"><a class="nav-link" href="../cerrar.php">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 400px;">
        <h3 class="text-center mb-4">Búsqueda de estudiantes</h3>

        <form method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Introduzca el nombre del estudiante</label>
                <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre" required>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>

    <?php
    if (!empty($_POST)):
        $aBuscar = trim($_POST["nombre"]);
        $encontrado = false;

        if (!empty($_SESSION["listado"])) {
            foreach ($_SESSION["listado"] as $item) {
                if (strcasecmp($aBuscar, $item["nombre"]) === 0) { // compara sin distinguir mayúsculas
                    $encontrado = true;
                    ?>

                    <div class="card mt-4 mx-auto border-success shadow-sm" style="max-width: 500px;">
                        <div class="card-header bg-success text-white text-center">
                            Estudiante encontrado
                        </div>
                        <div class="card-body text-center">
                            <p><strong>Nombre:</strong> <?= htmlspecialchars($item["nombre"]) ?></p>
                            <p><strong>Notas:</strong> <?= htmlspecialchars(implode(", ", $item["notas"])) ?></p>
                            <p><strong>Promedio:</strong> <?= htmlspecialchars($item["promedio"]) ?></p>
                            <p><strong>Estado:</strong> <?= htmlspecialchars($item["estado"]) ?></p>
                        </div>
                    </div>

                    <?php
                    break;
                }
            }
        }
        if (!$encontrado): ?>
            <div class="alert alert-danger text-center mt-4" role="alert">
                No existe tal usuario. Verifique el nombre ingresado.
            </div>
        <?php endif;
    endif;
    ?>
</div>
</body>
</html>
