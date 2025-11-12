<?php
require_once "PDF.php";
require_once "Excel.php";

$pdf = new PDF();
$excel = new Excel();

echo $pdf->exportar();
echo $excel->exportar();