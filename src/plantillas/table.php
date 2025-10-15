<table class="table table-bordered table-striped text-center align-middle" style="table-layout: fixed; width: 100%;">
    <thead class="table-light">
    <tr>
        <th class="text-center">Alumno</th>
        <th class="text-center">Notas</th>
        <th class="text-center">Promedio</th>
        <th class="text-center">Estado</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($_SESSION["listado"] as $item):
        echo "<tr>";
        echo "<td>{$item["nombre"]}</td>";
        echo "<td>" . implode(", ", $item["notas"]) . "</td>";
        echo "<td>{$item["promedio"]}</td>";
        echo "<td>{$item["estado"]}</td>";
        echo "</tr>";
    endforeach;
    ?>
    </tbody>
</table>