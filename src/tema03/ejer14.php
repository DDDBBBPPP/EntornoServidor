<!doctype html>
<html lang="ses">
<head>
    <meta charset="UTF-8">
    <title>PARES IMPARES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container w-75">
<?php
$numeros = [];
$pares = [];
$impares = [];
$aux = [];
for ($i = 0; $i < 20; $i++):
    $random = rand(0, 100);
    //$numeros[] = rand(0,100); Funciona igual.
    array_push($numeros, $random);
    if ($random % 2 == 0):
        array_push($pares, $random);
    else:
        array_push($impares, $random);
    endif;
endfor;
$aux = [...$pares, ...$impares];
?>

<table class="table" >
    <thead>
    <tr>
        <th class="text-center" colspan="20">SUPER ARRAYS</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="text-center" colspan="20">Array original</td>
    </tr>
    <tr>
        <?php
        foreach ($numeros as $ind => $item):
            echo "<td class='text-center'>$ind</td>";
        endforeach;
        ?>
    </tr>
    <tr>
        <?php
        foreach ($numeros as $ind => $item):
            echo "<td class='text-center'>$item</td>";

        endforeach;
        ?>
    </tr>
    <tr>
        <td class="text-center" colspan="20">Array modificado</td>
    </tr>
    <tr>
        <?php
        foreach ($aux as $ind => $item):
            echo "<td class='text-center'>$ind</td>";
        endforeach;
        ?>
    </tr>
    <tr>
        <?php
        foreach ($aux as $ind => $item):
            echo "<td class='text-center'>$item</td>";
        endforeach;
        ?>
    </tr>
    </tbody>
</table>
</div>
</body>
</html>
