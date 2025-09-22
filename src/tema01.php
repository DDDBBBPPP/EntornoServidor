<?php

// Código de ejemplo
#Definimos un array

$letras = array("A","B","C","D","E","F") ;

echo $letras[3], "<br/>" ;
print_r($letras) ;
echo "<br/>";
#Definimos un array numerico
$numeros = [1,2,3,4,5,6,7,8,9] ;
echo "El número de la celda 2: ", $numeros[2], "<br/>" ;
echo "El número de la celda 3: " . $numeros[2], "<br/>" ; # concatenacion (.)
echo "El número de la celda 6: {$numeros[6]}<br/>" ; #Con expansion de variables


echo "<br/>";
#Forma PELIGROSA de construir un array
$valores[] = 32 ;
$valores[] = 64 ;
$valores[] = 12 ;
$valores[] = 3 ;
$valores[] = -17 ;

var_dump($valores) ;
echo "<br/>";

unset($valores[4]) ;# Destruye una variable

var_dump($valores) ;

echo "<br/>";


$valores[] = 47 ;
$valores[] = 5 ;

var_dump($valores) ; # Aqui vemos que la celda 4 ha desparecido para siempre.

echo "<br/>";
echo "<br/>";

#Array Escalar
$colores = [ "rojo". "amarillo", "azul", 5 => "morado", "celeste", "verde"] ;

print_r($colores) ;


echo "<br/>";
echo "<br/>";

#Array asociativo
$meses = [  "enero" => 21.2,
            "febrero" => 30.3,
            "marzo" => 45.4,
            "abril" => 54.6 ] ;

print_r($meses) ;

echo "<br/>";
echo "<br/>";

#ARRAY MIXTOS


$datos = [1 => "a",
        "1" => false,
         2.2 => null,
        true => -80] ;

var_dump($datos) ;

echo "<br/>";
echo "<br/>";

#Array multidimensional



$datitos = [ ["NEU", "Neumático", 100],
             ["ACE", "Aceite", 10.9],
             ["BUJ", "Bujias", 4]] ;

print_r($datitos) ;

echo "<br/>";
echo "<br/>";

echo "<pre>".print_r($datitos, true)."</pre>" ; # Esto pa que se vea perfe. La etiqueta pre escribe eso
# como tu lo has escrito.

echo "<br/>";
echo "<br/>";

echo "Precio:  " . $datitos[1][2] . "<br/>" ;

echo "<br/>";
echo "<br/>";


#OPERADOR DE FUSIÓN NULA ??

$resultado = $a??"adios"??null??"Hola mundo" ;

echo $resultado ;

echo "<br/>";
echo "<br/>";

#Operador Spaceship <=>

echo 8<=>5;