<?php
require_once "Cuenta.php";
require_once "Autenticable.php";

class CuentaBancaria extends Cuenta
{
    use Autenticable;



    public function retirar(float $cantidad):void
    {
      $this->autenticar();
      $this->saldo = ($this->saldo>=abs($cantidad))?$this->saldo-=abs($cantidad):$this->saldo;
    }


    /**
     * @param $cantidad
     * @return void
     * Añade saldo
     */
    public function depositar($cantidad):void
    {
     $this->autenticar();
        $this->saldo += abs($cantidad);
    }
}
