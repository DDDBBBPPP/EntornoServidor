<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <div class="row mt-3">
        <div class="col-8">
            <h5>1. Agregar un nuevo producto</h5>
            <p>Solicita nombre, precio unitario, cantidad en stock y categoría. Valida los datos y guarda en <code>$_SESSION['productos']</code>.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt1.php" class="btn btn-primary">Ir a opción 1</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>2. Mostrar listado completo</h5>
            <p>Tabla con nombre, categoría, precio, cantidad y valor total. Muestra los totales del inventario.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt2.php" class="btn btn-primary">Ir a opción 2</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>3. Buscar producto por nombre o categoría</h5>
            <p>Permite búsqueda exacta o por filtro. Muestra los resultados o un mensaje si no se encuentra.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt3.php" class="btn btn-primary">Ir a opción 3</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>4. Eliminar producto</h5>
            <p>Solicita el nombre del producto y lo elimina si existe.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt4.php" class="btn btn-primary">Ir a opción 4</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>5. Actualizar información de un producto</h5>
            <p>Permite editar los datos de un producto existente.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt5.php" class="btn btn-primary">Ir a opción 5</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>6. Ordenar productos</h5>
            <p>Ordena el listado por nombre, precio o cantidad (ascendente o descendente) usando <code>usort()</code>.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt6.php" class="btn btn-primary">Ir a opción 6</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3">
        <div class="col-8">
            <h5>7. Mostrar estadísticas generales</h5>
            <p>Muestra total de productos, valor total, precio promedio, mayor/menor stock y categoría con más productos.</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt7.php" class="btn btn-primary">Ir a opción 7</a>
        </div>
    </div>
    <hr>

    <div class="row mt-3 mb-4">
        <div class="col-8">
            <h5>8. Borrar toda la información</h5>
            <p>Elimina todos los datos de sesión (<code>session_destroy()</code>).</p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a href="./options/opt8.php" class="btn btn-danger">Ir a opción 8</a>
        </div>
    </div>

</div>
</body>
</html>
