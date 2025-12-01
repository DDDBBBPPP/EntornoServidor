<?php

class HabitacionSuite extends Habitacion
{
    private bool $jacuzzi;
    private ?string $vistas;
    private bool $terraza;
    private bool $minibar;

    public function __construct(
        int $id_habitacion,
        int $numero,
        int $piso,
        int $capacidad,
        float $precio,
        bool $jacuzzi,
        ?string $vistas,
        bool $terraza,
        bool $minibar
    ) {
        parent::__construct($id_habitacion, $numero, $piso, $capacidad, $precio, "suite");

        $this->jacuzzi   = $jacuzzi;
        $this->vistas    = $vistas;
        $this->terraza   = $terraza;
        $this->minibar   = $minibar;
    }
}

