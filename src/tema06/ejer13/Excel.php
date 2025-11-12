<?php
require_once "iExportable.php";

class Excel implements iExportable
{
    public function exportar(): string
    {
        return "Exportando a Excel<br/>";
    }
}