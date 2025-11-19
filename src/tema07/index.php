<?php
    #Conectamos con la base de datos utilizando PDO
    require_once "./clases/Usuario.php";

    try {


        $dns = "mysql:host=db;dbname=prueba;charset=utf8"; // El db es el nombre del servicio

        $pdo = PDO::connect($dns, "root", "root"); // Devuelve un objeto de clase PDO \mysql

    } catch (PDOException $pdoe) {
        die ("**ERROR: " . $pdoe->getMessage());
    }

    echo "Se ha conectado correctamente.";

    # Devuelve un objeto de tipo PDOStatement: implementa una interfaz Traversable
    #La interfaz convierte el objeto en iterable (se puede recorrer con foreach)
    $resultado = $pdo->query("SELECT * FROM usuario;"); // El query para consultas de tipo select.

    #Recuperando inforamcion
    #1 Objeto PDOStatement que es itreable
    #2 Méto do fetchAll() de la clase PDOStatement devuelve un array con todas las filas
    //$datos = $resultado->fetchAll();  //Si pones PDO::FETCH_NUM o PDO::FETCH_ASSOC pues te da un array numerico y dentro
    // o un array escalar o uno asociativo Array de arrays asociativos
    // SI pones dentro del fetchAll(PDO::FETCH_COLUMN,1 o 2 o 3) te da la columna en un array escalar. Por ejemplo todos los DNIS
    //FETCH_OBJ te devuelve un array de objetos
    //echo  $datos[0]->nombre

    // OTRA es PDO::FETCH_CLASS, "Usuario"), Puedes poner tambien en vez
    //de "Usuario" Usuario::class y te devuelve un array de objetos de la clase Usuario
    // Si no pònes constante seria PDO::FETCH_BOTH que es un array mixto



     # 3 metodo fetch() de la clase PDOStatement devuelve una fila cada vez que se llama ( Si no pones nada, con el both,
    // Y si no alguno mas, te deja


    #4 fetchObject() de la clase PDOStatement devuelve una fila cada vez que se llama como un objeto estandar
    // o de una clase concreta si se lo indicas

    #5 fetchColumn() de la clase PDOStatement devuelve el valor de una columna concreta de la fila actual.

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
            <li><?php echo "{$usuario["nombre"]} {$usuario["apellido"]}" ?></li>
        <?php endforeach; ?>
        <ul/>
</div>
</body>
</html>