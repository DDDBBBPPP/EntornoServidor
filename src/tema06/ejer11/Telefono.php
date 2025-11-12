<?php

require_once "DispositivoElectronico.php";
class Telefono extends DispositivoElectronico
{
    public function encender(): string
    {
        return "El teléfono se está encendiendo.<br/>";
    }
}