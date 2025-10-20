
$productos = [
["nombre" => "Camisa", "precio" => 20],
["nombre" => "Zapatos", "precio" => 50],
["nombre" => "Pantalón", "precio" => 35]
];

usort($productos, function($a, $b) {
return $a["precio"] <=> $b["precio"];
});

