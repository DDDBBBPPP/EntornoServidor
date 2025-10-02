<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array Mostrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <?php if (!empty($_GET)):
        $nums = explode(",", rtrim($_GET["nums"], ","));

        ?>

        <table class="table">
            <tr>
                <thead>
            <tr>


                <?php
                foreach ($nums as $indice => $item):?>
                    <th class="text-center"><?= $indice ?></th>

                <?php endforeach; ?>
            </tr>

            <tr>
                <tbody>
            <tr>


                <?php
                foreach ($nums as $indice => $item):?>
                    <th class="text-center"><?= $item ?></th>

                <?php endforeach; ?>
            </tr>

            </tbody>
            </tr>
        </table>
    <?php else: ?>

        <form method="get">
            <div class="row mt-3">
                <div class="col-2">
                    <label for="nums" class="form-label">Introduzca los numeros separados por coma</label>
                </div>
                <div class="col-2">


                    <input id="nums" type="text" name="nums"/>
                </div>
            </div>
            <br/>

            <br/>

            <button class="btn btn-primary">Resuelve</button>

        </form>

    <?php endif; ?>
</div>

</body>
</html>