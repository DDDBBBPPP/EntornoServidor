<!DOCTYPE html>
<html>
<head>
    <title>Ej-16</title>
    <meta charset="utf-8"/>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { text-align: center; margin-bottom: 30px; }
        .serie { display: flex; margin-bottom: 25px; align-items: flex-start; }
        .serie img { width: 120px; margin-right: 15px; border-radius: 8px; }
        .info { max-width: 600px; }
        .titulo { font-size: 20px; font-weight: bold; }
        .plataforma { color: gray; font-size: 14px; margin-bottom: 5px; }
        .nota { font-weight: bold; }
    </style>
</head>
<body>

<h1>Ejer-16</h1>

<?php
$series = [
        [
                "titulo" => "Peaky Blinders",
                "poster" => "img/PB.png",
                "plataforma" => "Netflix",
                "nota" => "9",
                "argumento" => "Tios duros con navajas en la boina"
        ],
        [
                "titulo" => "One piece",
                "poster" => "img/OP.png",
                "plataforma" => "Crunchyroll",
                "nota" => "9.5",
                "argumento" => "Piratería por todo el mundo "
        ],
        [
                "titulo" => "Aquí no hay quien viva",
                "poster" => "img/ANHQV.png",
                "plataforma" => "Antena 3",
                "nota" => "8.5",
                "argumento" => "Comunidad de vecinos sólida"
        ],
        [
                "titulo" => "Suits",
                "poster" => "img/Suits.png",
                "plataforma" => "Netflix",
                "nota" => "8",
                "argumento" => "Abogados forrándose y muchos líos"
        ],
        [
                "titulo" => "The Blacklist",
                "poster" => "img/TB.png",
                "plataforma" => "Netflix",
                "nota" => "7.4",
                "argumento" => "Un jefe del bajo mundo traiciona a toda su gente."
        ]
];

// Mostrar cada serie
foreach ($series as $serie) {
    echo "<div class='serie'>";
    echo "<img src='{$serie['poster']}' alt='{$serie['titulo']}'>";
    echo "<div class='info'>";
    echo "<div class='titulo'>{$serie['titulo']}</div>";
    echo "<div class='plataforma'>{$serie['plataforma']} | Nota: <span class='nota'>{$serie['nota']}</span></div>";
    echo "<p>{$serie['argumento']}</p>";
    echo "</div>";
    echo "</div>";
}
?>

</body>
</html>
