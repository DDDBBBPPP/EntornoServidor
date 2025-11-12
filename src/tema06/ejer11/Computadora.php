<?php
require_once "DispositivoElectronico.php";


class Computadora extends DispositivoElectronico
{
    public function encender(): string
    {
        return "La computadora se está encendiendo.<br/>";
    }
}