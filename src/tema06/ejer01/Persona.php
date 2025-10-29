<?php

class Persona
{

    public string $nombre {
    #Hook de escritura
set
{

    $this->nombre = ucfirst($value); //
}
}

public string $fecha {
        #Hook de lectura
    get{
        return date("d/m/Y",strtotime($_GET["fecha"]));
    }
}
public string $apellido;
    #Propiedad virtual
public string $nombreCompleto
    {
        get => "$this->nombre $this->apellido";
    }
public int $edad;


    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}