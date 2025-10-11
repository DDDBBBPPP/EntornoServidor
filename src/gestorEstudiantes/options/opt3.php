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
                    <a class="nav-link active" aria-current="page" href="#">Buscar usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt4.php">Eliminar usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="opt5.php">Estadísticas</a>
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
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <h3 class="text-center mb-4">Búsqueda de estudiantes</h3>

            <form method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Introduzca el nombre del estudiante</label>
                    <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre"
                           required>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
<?php if(!empty($_GET)):
    $aBuscar = $_GET["nombre"];
    $encontrado = false;
    $mostrado = false;
    foreach ($_SESSION["listado"] as $item):
        if ($aBuscar == $item["nombre"]) $encontrado = true;
        if ($encontrado):
            echo implode(", ", $item);
            $encontrado = false;
            $mostrado = true;
        endif;
        break;
    endforeach;
    if (!$mostrado):?>
        <div class="alert alert-danger mt-4" role="alert">
            No existe tal usuario. Prueba también a escribir el nombre correctamente.
        </div>
    <?php endif;
    endif;
?>
</body>
</html>