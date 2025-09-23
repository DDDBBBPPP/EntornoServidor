<?php

const IVA = 0.21 ;
(integer)$precio = 100 ;
(integer)$resultado = ($precio*IVA) + $precio;

echo "El precio total es {$resultado}" ;