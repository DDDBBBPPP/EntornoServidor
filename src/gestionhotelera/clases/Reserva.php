<?php

class Reserva
{
    private int $id_reserva;
    private int $id_cliente;
    private int $id_habitacion;
    private string $fecha_entrada;
    private string $fecha_salida;
    private string $estado;

    public function __construct(
        int $id_reserva,
        int $id_cliente,
        int $id_habitacion,
        string $fecha_entrada,
        string $fecha_salida,
        string $estado
    ) {
        $this->id_reserva = $id_reserva;
        $this->id_cliente = $id_cliente;
        $this->id_habitacion = $id_habitacion;
        $this->fecha_entrada = $fecha_entrada;
        $this->fecha_salida = $fecha_salida;
        $this->estado = $estado;
    }
}

