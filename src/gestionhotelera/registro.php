<?php

if (!empty($_POST)):

    try {
        $dns = "mysql:host=localhost;dbname=hotel;charset=utf8;";
        $pdo = PDO::connect($dns, "root", "root");

    } catch (PDOException $pdoe) {
        $error = "Error al conectar con la base de datos.";
    }

    if (!isset($error)) {

        $nombre = addslashes($_POST["usuario"]);
        $email = addslashes($_POST["email"]);
        $password = addslashes($_POST["contraseña"]);

        // 1. Comprobar si el email ya existe
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $pdop = $pdo->prepare($sql);
        $pdop->bindValue(":email", $email);
        $pdop->execute();

        $existe = $pdop->fetch(PDO::FETCH_ASSOC);

        if ($existe) {

            $error = "El correo ya está registrado.";

        } else {

            try {
                // 2. Insertar en usuarios
                $sql_insert_usuario = "INSERT INTO usuarios
                    (nombre, apellidos, email, password, tipo_usuario)
                    VALUES
                    (:nombre, NULL, :email, :password, 'cliente')";

                $insertU = $pdo->prepare($sql_insert_usuario);
                $insertU->bindValue(":nombre", $nombre);
                $insertU->bindValue(":email", $email);
                $insertU->bindValue(":password", $password);

                $insertU->execute();

                // 3. Obtener ID del nuevo usuario
                $id_usuario = $pdo->lastInsertId();

                // 4. Insertar en clientes
                $sql_insert_cliente = "INSERT INTO clientes 
                        (id_cliente, telefono, direccion)
                        VALUES (:id, NULL, NULL)";

                $insertC = $pdo->prepare($sql_insert_cliente);
                $insertC->bindValue(":id", $id_usuario);
                $insertC->execute();
                $success = "Cuenta creada correctamente. ¡Ya puedes iniciar sesión!";

            } catch (PDOException $e) {
                $error = "Error al registrar el usuario.";
            }
        }
    }

endif;
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Gestor Hotelero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hotel-icon {
            font-size: 50px;
            color: #198754;
        }
    </style>
</head>
<body>
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow p-4" style="max-width: 430px; width: 100%;">

        <div class="text-center mb-3">
            <div class="hotel-icon">🏨</div>
            <h3 class="mt-2">Gestor Hotelero</h3>
            <h5 class="text-success">Crear Nueva Cuenta</h5>
        </div>

        <form action="" method="post">

            <div class="mt-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input id="usuario" type="text" name="usuario" class="form-control" required autofocus>
            </div>

            <div class="mt-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input id="email" type="email" name="email" class="form-control" required>
            </div>

            <div class="mt-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input id="contraseña" type="password" name="contraseña" required class="form-control">
            </div>

            <!-- ERROR O ÉXITO AQUÍ MISMO (solo uno aparecerá) -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center mt-3 mb-1">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <?php if (isset($success)): ?>
                <div class="alert alert-success text-center mt-3 mb-1">
                    <?= $success ?>
                </div>
            <?php endif; ?>

            <div class="d-grid mt-3">
                <button class="btn btn-success">Crear Cuenta</button>
            </div>

        </form>

        <div class="text-center mt-3">
            <p class="mb-0">¿Ya tienes cuenta?
                <a href="login.php">Inicia sesión aquí</a>
            </p>
        </div>

    </div>
</div>
</body>
</html>
