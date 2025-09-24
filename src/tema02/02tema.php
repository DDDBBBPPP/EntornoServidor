<pre>
Hola
  Mundo

</pre>

<?php

//Ejemplo Match y switch
$dia = 3;
echo match($dia){
    1,2,3,4,5 => "dia laborable",
    6,7       => "fin de semana",
    default   => "el valor es erróneo"


};

echo "<br/>";
echo "<br/>";
echo "<br/>";

switch ($dia) {

    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
            echo "dia laborable";
            break;
    case 6:
    case 7:
            echo "fin de semana";
            break;
    default:
        echo "el valor es erróneo" ;

}
echo "<br/>";
echo "<br/>";


#Bucle FOR

for($i = 100; $i <= 100; $i++){
    echo $i . "<br/>";
}


/*$i = 1;
 * for(; $i <= 100; $i++){
    echo "$i<br/>";
}
*/

#Bucle Foreach
$vector = [11,25,32,44];

foreach($vector as $indice => $valor){

    echo "Índice: $indice, Valor: $valor<br/>";
}

echo "<br/>";

# Bucle Foreach asociativo
$asociao = ["cero" => 2, "uno"=> 1,
    "dos" => 3,"tres" => 1999];

foreach($asociao as $indice => $valor){

    echo "Índice: $indice, Valor: $valor<br/>";
}


echo "<br/>";

# Bucle Foreach mixto
$mixto = ["cero" => 2, 1, "dos" => 3, 1999];

foreach($mixto as $indice => $valor){

    echo "Índice: $indice, Valor: $valor<br/>";
}



#Recorrerlo con matriz

echo "<br/>";
echo "<br/>";

$matriz = [ [1,2,3], [4,5,6], [7,8,9]];

foreach($matriz as $indice => $valor){

    foreach($valor as $indice2 => $valor2){

        echo "$valor2 " ;
    }
    echo "<br/>";

}

echo "<br/>";
echo "<br/>";

# puedes obviar los indices
foreach($matriz as $valor){

    foreach($valor as $valor2){

        echo "$valor2 " ;
    }
    echo "<br/>";

}

# Formatear bonito las matrices
 //La etiqueta <pre></pre> escribe todo tal cual sale

echo "</br>";
echo "Formateado con pre";
echo "</br>";


echo "<pre>".print_r($matriz,true)."</pre>";

// Si lo pones en bloque no hace falta el true
echo "</br>";
echo "Formateado con pre en bloque ";
echo "</br>";

echo "<pre>";
print_r($matriz);
echo "</pre>";




?>