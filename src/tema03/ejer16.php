<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arrays diagonales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    $matriz = null;
    $plano = [];
    $minimo = 1000;
    $repe = false;
    for ($i = 0; $i < 6; $i++):
        for ($j = 0; $j < 9; $j++):
            do {
                $num = rand(0, 999);
                $repe = in_array($num, $plano);
            } while ($repe);
            $repe = false;
            $matriz[$i][$j] = $num;
            array_push($plano, $num);
        endfor;
    endfor;

    for ($i = 0; $i < 6; $i++):
        for ($j = 0; $j < 9; $j++):
            if ($matriz[$i][$j] < $minimo):
                $minimo = $matriz[$i][$j];
                $casilla = [$i, $j];
            endif;
        endfor;
    endfor;

    ?>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center" colspan="9"> TABLA 6x9 COLOREADA</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < 6; $i++):
            echo "<tr>";
            for ($j = 0; $j < 9; $j++):
                if($matriz[$i][$j]==$matriz[$casilla[0]][$casilla[1]]):
                echo "<td class=\"text-center text-primary fw-bold\" >{$matriz[$i][$j]}</td>";
                elseif(abs($i - $casilla[0]) == abs($j - $casilla[1])):
                    echo "<td class=\"text-center text-success fw-bold\" >{$matriz[$i][$j]}</td>";
                else:
                    echo "<td class=\"text-center text-dark fw-bold\" >{$matriz[$i][$j]}</td>";
                endif;
            endfor;
            echo"</tr>";
        endfor;

        ?>
        </tbody>
    </table>
</div>
</body>
</html>