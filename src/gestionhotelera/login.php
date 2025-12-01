<?php
session_start();

if (!empty($_POST)):

    try {
        $dns = "mysql:host=localhost;dbname=hotel;charset=utf8;";
        $pdo = PDO::connect($dns, "root", "root");

    } catch (PDOException $pdoe) {
        die("**ERROR: " . $pdoe->getMessage());
    }

    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);

    $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :pass";
    $pdop = $pdo->prepare($sql);

    $pdop->bindValue(":email", $email);
    $pdop->bindValue(":pass", $password);
    $pdop->execute();

    // Fetch normal, sin usar clase
    $usuario = $pdop->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {

        // Guardar datos en sesión
        $_SESSION["usuario"] = $usuario["nombre"];
        $_SESSION["id_usuario"] = $usuario["id_usuario"];
        $_SESSION["tipo_usuario"] = $usuario["tipo_usuario"];

        header("Location: index.php");
        exit;

    } else {
        $error = "Usuario o contraseña incorrectos";
    }

endif;
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Gestor Hotelero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hotel-icon {
            font-size: 50px;
            color: #0d6efd;
        }
    </style>
</head>
<body>
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

            <!-- MENSAJE DE ERROR AQUÍ MISMO -->
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

