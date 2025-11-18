<?php
#Conectamos con la base de datos utilizando PDO

    try {


        $dns = "mysql:host=db;dbname=prueba;charset=utf8"; // El db es el nombre del servicio

        $pdo = PDO::connect($dns, "root", "root"); // Devuelve un objeto de clase PDO \mysql

    } catch(PDOException $pdoe){
        die ("**ERROR: " . $pdoe->getMessage());
    }

    echo "Se ha conectado correctamente.";

    # Devuelve un objeto de tipo PDOStatement: implementa una interfaz Traversable
    #La interfaz convierte el objeto en iterable (se puede recorrer con foreach)
    $resultado =$pdo->query("SELECT * FROM usuario ;");
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bases de Datos</title>
</head>
<body>
    <div class="container">
        <ul>
        <?php foreach ($resultado as $usuario): ?>
            <li><?php echo "{$usuario["nombre"]} {$usuario["apellido"]}"?></li>
        <?php endforeach; ?>
        <ul/>
    </div>
</body>
</html>