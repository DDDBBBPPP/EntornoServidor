<?php
// Array asociativo con los puntos de la brisca
$valores = [
    "1" => 11,
    "3" => 10,
    "10" => 2,  // Sota
    "11" => 3,  // Caballo
    "12" => 4   // Rey
];

// Palos de la baraja española
$palos = ["Oros", "Copas", "Espadas", "Bastos"];

// Generar la baraja completa (40 cartas)
$baraja = [];
foreach ($palos as $palo) {
    for ($i = 1; $i <= 12; $i++) {
        if ($i != 8 && $i != 9) { // en la baraja española no existen 8 y 9
            $baraja[] = ["carta" => $i, "palo" => $palo];
        }
    }
}

// Mezclar y sacar 10 cartas distintas
shuffle($baraja);
$mano = array_slice($baraja, 0, 10);

// Calcular puntos
$puntosTotales = 0;
echo "<h2>Cartas elegidas:</h2><ul>";
foreach ($mano as $carta) {
    $valor = $carta["carta"];
    $palo = $carta["palo"];

    // Obtener puntos (si no está en array, vale 0)
    $puntos = $valores[$valor] ?? 0;
    $puntosTotales += $puntos;

    // Mostrar carta y puntos
    echo "<li>{$valor} de {$palo} → {$puntos} puntos</li>";
}
echo "</ul>";
echo "<h3>Puntuación total: {$puntosTotales}</h3>";
?>
