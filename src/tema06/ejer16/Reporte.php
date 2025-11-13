<?php
require_once "iImprimible.php";
require_once "Documento.php";
require_once "Versionable.php";


class Reporte extends Documento implements iImprimible
{
    use Versionable;

    public function guardar(): void
    {
       echo "Guardando...<br/>";
    }

    public function imprimir(): void
    {
        echo "Imprimiendo...<br/>";
    }


}