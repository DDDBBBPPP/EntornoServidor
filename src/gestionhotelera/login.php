<?php
require_once "autoload.php";

use Clases\Logic\BaseDatos;
use Clases\Logic\Sesion;
use Clases\Logic\Request;

Sesion::iniciar();

if (Sesion::get("usuario")) {
    Request::redirect("index.php");
}

if (!empty($_POST)) {

    try {
        $pdo = BaseDatos::conectar();

        $email    = Request::post("email");
        $password = Request::post("password");

        $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :pass";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {

            Sesion::set("usuario", $usuario);
            Sesion::set("tiempo", time());

            Request::redirect("index.php");

        } else {
            $error = "Usuario o contraseña incorrectos";
        }

    } catch (PDOException $pdoe) {
        $error = "Error al conectar con la base de datos.";
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Gestor Hotelero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .hotel-icon {
            font-size: 50px;
            color: #0d6efd;
        }
    </style>
</head>
<body>
<!-- TU HTML COMPLETO TAL CUAL LO TENÍAS -->
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow p-4" style="max-width: 430px; width: 100%;">

        <div class="text-center mb-3">
            <div class="hotel-icon">🏨</div>
            <h3 class="mt-2">Gestor Hotelero</h3>
            <h5 class="text-secondary">Acceso de Usuario</h5>
        </div>

        <form action="" method="post">

            <div class="mt-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input id="email" type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mt-3">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" name="password" required class="form-control">
            </div>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center mt-3 mb-1">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <div class="d-grid mt-3">
                <button class="btn btn-primary">Acceder</button>
            </div>

        </form>

        <div class="text-center mt-3">
            <p class="mb-0">¿No tienes cuenta?
                <a href="registro.php">Regístrate aquí</a>
            </p>
        </div>

    </div>
</div>
</body>
</html>
