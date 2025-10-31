<?php

class TarjetaMetro
{

    private  float $saldo;

    public bool $activo;

public int $viajes;


    /**
     * @param string $codigo
     * @param string $tipo
     * Constructor
     */
    public function __construct(public readonly string $codigo,
                                public readonly string $tipo = "normal",
    )
    {
        $this->saldo = 0;
        $this->activo = true;
        $this->viajes = 0;
    }


    public function recargar(float $cantidad): void
    {
        if ($this->activo) $this->saldo += abs($cantidad);

    }


    /**
     * @param float $precio
     * @return void
     * Viaja y comprueba cosas
     */
    public function viajar(float $precio): float|false
    {
        $resultado = false;
        if ($precio > $this->saldo || !$this->activo):

        else:
            $this->saldo -= $precio;
            $this->viajes++;
            $resultado = $this->saldo;
        endif;

        return $resultado;


    }

    public function getSaldo():float
    {
        return $this->saldo;
    }


    public function getactivo():bool
    {
        return $this->activo;
    }

}