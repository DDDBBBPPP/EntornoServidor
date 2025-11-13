<?php


trait RegistroAuditoria
{


    public function registrarAccion(string $accion):void
    {
        echo "Accion registrada: {$accion}<br/>";
    }
}