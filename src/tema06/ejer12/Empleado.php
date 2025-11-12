<?php

class Empleado
{
    protected string $nombre;

    /**
     * @param string $nombre
     * Constructor
     */
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }


    /**
     * @return String
     * Trabaja
     */
    public function trabajar():String
    {
        return "El empleado está trabajando";
    }



}