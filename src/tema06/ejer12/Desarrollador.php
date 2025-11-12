<?php
require_once "Empleado.php";


class Desarrollador extends Empleado
{

    /**
     * @param string $nombre
     * Constructor hijo
     */
    public function __construct(string $nombre)
    {
        parent::__construct($nombre);
    }

    public function trabajar(): string
    {
        return "El desarrollador ". $this->nombre . " está programando.";
    }
}