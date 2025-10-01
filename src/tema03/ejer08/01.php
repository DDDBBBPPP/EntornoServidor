<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php if(empty($_GET)): ?>
    <form method="get"> <!-- Puedes obviar el action si lo envias al mismo script. -->
        <?php echo "<pre>" . print_r($_GET)."</pre>"; ?>
        <label for="numeros" class="form-label">Introduce valores separados por comas</label>
        <textarea id="numeros" name="numeros" class="form-control" autofocus></textarea>


        <button class="btn btn-primary mt-2">Calcular</button>


    </form>
    <?php else:

   // if(!empty($_GET)): // ESTO TE DICE si una variable esta seteada. empty($_GET) Pa ver si esta empty
     //   echo "Hay información";// isset es TE DICE si una variable esta seteada.
       // echo "<br/>";

        $numeros = explode(",", rtrim($_GET["numeros"],","));// el rtrim borra el caracter que tu pongas al final ( derecha)
                                                                                // ltrim corta a la izquierda del array
        $suma = 0;

        //foreach($numeros as $item):
          //  $suma += $item;
        //endforeach;

    foreach($numeros as $item):
        if(is_numeric($item)): // los espacios los obvia
            $suma += $item;
        endif;
    endforeach ;
        $suma = array_sum($numeros);
        echo "SUMA: $suma";

    endif;
    ?>
</div>

</body>
</html>
