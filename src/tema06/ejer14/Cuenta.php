<?php

class Cuenta
{

    protected float $saldo = 0;


    /**
     * @param $cantidad
     * @return void
     * Añade saldo
     */
    public function depositar($cantidad): void
    {
        $this->saldo += abs($cantidad);
    }



    public function mostrarSaldo():void
    {
        echo  $this->saldo . "<br/>";
    }
}