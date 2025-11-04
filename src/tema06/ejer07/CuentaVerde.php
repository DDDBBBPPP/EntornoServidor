<?php
require_once "CuentaEnergia.php";
class CuentaVerde extends CuentaEnergia {

    public int $paneles;

    public function __construct(string $id, string $titular)
    {
        parent::__construct($id, $titular);
        $this->paneles = 0;
    }

    public function instalarPaneles($cantidad):void
    {
        $this->paneles += $cantidad;
        $this->saldo += $cantidad*2;
    }


    /**
     * @param float $cantidad
     * @return void
     * Aumenta el saldo
     */
    public function generar(float $cantidad): void
    {
        $this->saldo += ($this->activa) ? (abs($cantidad) + (0.1*abs($cantidad)))  : 0;
    }

}




























?>