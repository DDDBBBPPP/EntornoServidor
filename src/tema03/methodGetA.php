<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="methodGetB.php" method="get">
    <br/>
    <label for="nombre">Nombre Completo</label>
    <input id="nombre" type="text" name="nombre" autofocus required/>

    <br/>

    <label for="contraseña">Contraseña</label>
    <input id="nombre" type="text" name="nombre" autofocus required/>

    <br/>

    <label for="fecha">Fecha</label>
    <input id="fecha" type="date" name="fecha"/>

    <br/>

    <label for="color">Color favorito</label>
    <input id="color" type="color" name="color"/>

    <br/>


    <label for="aficiones">Aficiones</label>
    <input id="aficiones" type="checkbox" name="aficiones[]" value="musica"/>Escuchar música
    <input type="checkbox" name="aficiones[]" value="Leer"/>Leer
    <input type="checkbox" name="aficiones[]" value="Videojuegos"/>Videojuegos

    <br/>


    <button type="submit" name="boton">Dale</button>


    <br/>

</form>
</body>
</html>