<?php

session_start();

if(isset($_GET["closed"])):
    $_SESSION = [];
    session_destroy();
    session_start();
endif;

$_SESSION["fondo"] = $_GET["fondo"]??$_SESSION["fondo"]??"#fff";

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{background-color:    }
    </style>
</head>
<body>

<h2>SESSION</h2>

<form method="get">
    <input type="color" name="fondo"/>
    <button>Dale</button>
    <br>
    <br>
    <a href="sesion.php?closed">Cerrar Sesion</a>


</form>
</body>
</html>


