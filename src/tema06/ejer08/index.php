<?php
require_once "Animal.php";
require_once "Leon.php";
require_once "Delfin.php";
require_once "Aguila.php";


$simba = new Leon("Serrano","Sabana");
$nala = new Leon("Bailalo","Sabana");
$simba->companero = $nala;

$simba->alimentar(40);
$nala->alimentar(50);

echo $simba ."<br/>";
echo $nala ."<br/>";

$pumba = clone $simba;

$kion = new Leon("Trágico","Selva");
$pumba->companero = $kion;

echo "Mostramos otra vez a simba y despues a pumba";
echo $simba ."<br/>";
echo $pumba ."<br/>";

$pumba->crecer(5);
echo "<br/>";
echo "Mostramos otra vez a simba y despues a pumba";
echo $simba ."<br/>";
echo $pumba ."<br/>";
echo "<br/>";

// ahora los isset.
var_dump(isset($simba->peso));
//unset($simba->peso);

$pumba("rugir");








?>


