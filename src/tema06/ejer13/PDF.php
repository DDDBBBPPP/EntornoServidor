<?php
require_once "iExportable.php";

class PDF implements iExportable
{
    public function exportar(): string
    {
        return "Exportando a PDF<br/>";
    }

}