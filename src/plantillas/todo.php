<?php
/*
unset()//  destruye una variable
array_push() // , añade al final de al array
array_unshift()// al principio del array.
array_shift() elimina del principio
array_pop al elimina del final

try{

}catch (Exception $e) {

}

<?=    ?> Se usa  dentro de la parte html pa incluir php.

count(FACTORES); Cuenta los elementos de un array

rand()  es una funcion que genera un valor aleatorio
intdiv() Esto hace que se mantenga la division en entero.

string int float bool array object void never null nullable union |

min()
max()
pos()
in_array() para saber si esta en el array.
empty() si la variable esta vacia ( pero esta seteada, se usa con susperglobales)
isset() Si se ha creado.


print_r()
var_dump() estos dos paladar mas infos de arrays y eso
phpinfo() pues da info sobre lo que espera.
<cite></cite> Para cursiva
gettype() devuelve el tipo de una variable
settype() cambia el tipo de una variable
var_export() devuelve info sobre una variable
array_sum() suma
const  CONSTANTE = 0. Asi se declara una constante
explode()Divide un string y devuelve un array de string
$notas = isset($_GET["notas"]) ? explode(",", rtrim($_GET["notas"], ",")) : null;
is_numeric() te dice si es numerico un numero
pow() hace la potencia
sqrt() hace la raiz cuadrada
isfloat()
shuffle() baraja el contenido de un array
range(0,1000); devuelve un array con el rango .
array_slice() saca una parte de un array
<?php
$frutas = ["manzana", "banana", "cereza", "durazno", "kiwi"];

// Extraer 3 elementos a partir del índice 1
$porcion = array_slice($frutas, 1, 3);

print_r($porcion);
?>
espacios:
$nbsp

$aux = [...$pares, ...$impares];

abs() devuelve el valor absoluto de una operacion
date()Format a local time/date
date("d/m/Y",strtotime($_GET["fecha"]))
$fecha = date("d/m/Y",strtotime($_GET["fecha"]));
strtotime Parse about any English textual datetime description into a Unix timestamp


implode() Join array elements with a string
echo "<td>" . implode(", ", $item["notas"]) . "</td>";
strlen()Get string length

strval() Get string value of a variable

strrev() Reverse a string

substr() return part of a string or false on failure
<?php
$texto = "Desarrollador";

// Los últimos 4 caracteres
$parte = substr($texto, -4);

echo $parte;
?>

<?php
$texto = "Programación PHP";

// Extraer desde el carácter 13 hasta el final
$parte = substr($texto, 13);

echo $parte;
?>

<?php
$texto = "Aprendiendo substr en PHP";

// Extraer 10 caracteres a partir del índice 12
$parte = substr($texto, 12, 10);

echo $parte;
?>


array_search()
<?php
$frutas = ["manzana", "banana", "cereza", "durazno"];

$clave = array_search("cereza", $frutas);

echo $clave; 2

?>


htmlspecialchars() Convert special characters to HTML entities
<strong> sale mas polluo

    trim() Strip whitespace (or other characters) from the beginning and end of a string

    strcasecmp() Binary safe case-insensitive string comparison
Comparacion de arrays

    array_values() return all the values of an array

    array_splice()
<?php
$frutas = ["manzana", "banana", "cereza", "durazno", "kiwi"];

// Eliminar 2 elementos a partir del índice 1
array_splice($frutas, 1, 2);

print_r($frutas);
?>
Array
(
    [0] => manzana
    [1] => durazno
    [2] => kiwi
)


<?php
$frutas = ["manzana", "banana", "cereza", "durazno"];

// Reemplazar "banana" y "cereza" por "pera" y "uva"
array_splice($frutas, 1, 2, ["pera", "uva"]);

print_r($frutas);
?>
Array
(
    [0] => manzana
    [1] => pera
    [2] => uva
    [3] => durazno
)


function rotarDerecha(array $tete, int $cant): array
{
    for (; $cant > 0; $cant--):

        array_unshift($tete,null);
    endfor;
    return $tete;
}
var_dump($numeros);
echo"<br>";
var_dump(rotarDerecha($numeros, 3));

echo "<br>";
echo "<br>";
echo "<br>";

function rotarIzquierda(array $tete, int $cant): array
{
    for (; $cant > 0; $cant--):

        array_shift($tete);
    endfor;
    return $tete;
}
var_dump($numeros);
echo"<br>";

var_dump(rotarIzquierda($numeros, 3));











function miFiltro(array $datos, $funcion){
    $otros = [];
    foreach ($datos as $item){

       ($funcion($item))?array_push($otros,$item):"";

    }
  return  $otros;
}







$pares = miFiltro($numeros, function($cha){

    return $cha%2 == 0;
});

print_r($pares);
is_null()



MAYUSCULA la primera letra mayuscula.

ucfirst(string);


match($puntuacion >=0) {
   // $puntuacion<0 => "El valor es erróneo",
    $cambio["peseta"] => "Novato",
    $puntuacion<70  =>  "Intermedio",
    $puntuacion<90  =>  "Avanzado",
    $puntuacion<101 =>  "Excelente",
    default         => "El valor es erróneo"
};
// este esta mejor creo
 $porcentaje = match (true) {
                $this->saltos < 5 => 0.002,
                $this->saltos < 10 => 0.003,
                $this->saltos < 30 => 0.004,
                $this->saltos >= 30 => 0.005,
                default => 1
            };
*/


