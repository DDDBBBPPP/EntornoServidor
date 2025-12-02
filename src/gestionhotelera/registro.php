<?php
require_once "autoload.php";

use Clases\Logic\BaseDatos;
use Clases\Logic\Request;

if (!empty($_POST)) {

    try {
        $pdo = BaseDatos::conectar();

        $nombre   = Request::post("usuario");
        $email    = Request::post("email");
        $password = Request::post("contraseña");

        // verificar email existente
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->fetch()) {
            $error = "El correo ya está registrado.";

        } else {

            // insertar usuario
            $sql = "INSERT INTO usuarios (nombre, apellidos, email, password, tipo_usuario)
                    VALUES (:nombre, NULL, :email, :password, 'cliente')";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            $id = $pdo->lastInsertId();

            // insertar cliente
            $sql = "INSERT INTO clientes (id_cliente, telefono, direccion)
                    VALUES (:id, NULL, NULL)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $success = "Cuenta creada correctamente. ¡Ya puedes iniciar sesión!";
        }

    } catch (PDOException $e) {
        $error = "Error al registrar usuario.";
    }
}
?>
<!-- TU HTML INTACTO -->
<!doctype html>
<html lang="es">
<head> ... </head>
<body> ... (tu formulario igual) ... </body>
</html>
