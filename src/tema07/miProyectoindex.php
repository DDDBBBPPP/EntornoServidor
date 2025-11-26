<?php






    // Pa que te eche de la sesion por tiempo.

// Guardas usuario y tiempo. EN EL LOGIN
$_SESSION["usuario"] = $tiempo;
$_SESSIOn["tiempo"] = time();


// Para login que vuelva
    if(isset($_SESSION["usuario"])) Request::redirect("main.php") ;

//Comprobamos si ha pasado el tiempo en todas las pestañas
    if(((time()- $_SESSIOn["tiempo"]) > 5 )) Request::redirect(cerrar.php);

# Refrescamos el tiempo
$_SESSION["tiempo"] = time();


$bd = Clases\Database::conectar();
$stmt = $bd->prepare;