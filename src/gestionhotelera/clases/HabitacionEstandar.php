<?php

class HabitacionEstandar extends Habitacion
{
    private bool $tiene_tv;

    public function __construct(
        int $id_habitacion,
        int $numero,
        int $piso,
        int $capacidad,
        float $precio,
        bool $tiene_tv = true
    ) {
        parent::__construct($id_habitacion, $numero, $piso, $capacidad, $precio, "estandar");
        $this->tiene_tv = $tiene_tv;
    }
}

