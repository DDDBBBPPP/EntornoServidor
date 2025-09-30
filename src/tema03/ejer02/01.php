<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejer01/01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <form action="02.php" method="post">
        <br/>
        <label for="moneda">Introduce los euros a convertir</label>
        <input id="moneda" type="number" name="moneda" autofocus required/>
        <select id="hola" name="cambio">
            <option value="peseta">Peseta</option>
            <option value="dolares">Dólares</option>
            <option value="libra">Libra esterlina</option>
            <option value="yen">Yen Japonés</option>
        </select>
        <br/>
        <button>Cambiar</button>
    </form>

</div>
</body>

</html>
