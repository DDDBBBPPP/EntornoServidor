<?php

trait AccionesComunes
{
    public function cerrarSesion():void
    {
        echo "Sesión cerrada para {$this->getNombre()}<br/>";
    }
}