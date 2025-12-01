<?php

class HabitacionPremium extends Habitacion
{
    private bool $terraza;
    private ?string $vistas;
    private bool $servicio_habitacion_24h;

    public function __construct(
        int $id_habitacion,
        int $numero,
        int $piso,
        int $capacidad,
        float $precio,
        bool $terraza,
        ?string $vistas,
        bool $servicio_habitacion_24h = true
    ) {
        parent::__construct($id_habitacion, $numero, $piso, $capacidad, $precio, "premium");

        $this->terraza = $terraza;
        $this->vistas = $vistas;
        $this->servicio_habitacion_24h = $servicio_habitacion_24h;
    }
}

