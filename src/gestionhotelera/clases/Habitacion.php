<?php

class Habitacion
{
    protected int $id_habitacion;
    protected int $numero;
    protected int $piso;
    protected int $capacidad;
    protected float $precio;
    protected string $tipo; // estandar | suite | premium

    public function __construct(
        int $id_habitacion,
        int $numero,
        int $piso,
        int $capacidad,
        float $precio,
        string $tipo
    ) {
        $this->id_habitacion = $id_habitacion;
        $this->numero = $numero;
        $this->piso = $piso;
        $this->capacidad = $capacidad;
        $this->precio = $precio;
        $this->tipo = $tipo;
    }
}

