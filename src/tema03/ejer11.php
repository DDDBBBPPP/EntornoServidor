<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vuelta número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if (!empty($_POST)):

        $numero = (int)$_POST["num"];
        $reves = 0;
        $aux = 0;
        $contador1= 0;

        while($numero>0):
        $reves = ($reves*10) + $numero%10;
        $numero = intdiv($numero, 10);
        $contador1++;
        endwhile;

        echo $reves;

    else: ?>
        <form method="post">
            <label for="num" class="form-label mt-3">Introduzca el número</label>
            <br/>
            <input id="num" name="num" type="number"/>
            <br/>
            <button class="btn btn-primary mt-3">¡VOLTEA!</button>
        </form>

    <?php endif; ?>
</div>
</body>
</html>