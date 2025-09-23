<?php

$numero = 12.25 ;

echo "La variable es de tipo:". gettype($numero);
settype($numero,"integer") ; //Con settype
echo "<br/>";
//$entero = (int) ($numero); Con casting
echo "La variable es de tipo:". gettype($numero);

settype($numero,"string") ; //Con settype
echo "<br/>";
//$entero = (int) ($numero); Con casting
echo "La variable es de tipo:". gettype($numero);

