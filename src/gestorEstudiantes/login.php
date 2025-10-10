<?php
session_start();

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-4">Bienvenido al Gestor de Estudiantes</h3>

        <form action="menu.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Profesor</label>
                <input id="usuario" type="text" name="usuario" class="form-control" placeholder="Ingrese su nombre" required>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Acceder</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
