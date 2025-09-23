<?php

(bool)$edad = true;
(string)$pais = "España";

#($edad == true) anda ($pais == "España")

$condicion = $edad and ($pais === "España") ;

echo "¿Cumple las condiciones?: ";
var_export($condicion);


?>