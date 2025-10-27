
<?php
/*Crear una clase que represente una cuenta bancaria.
La clase debe permitir consultar el saldo públicamente, pero solo modificarlo desde dentro
la clase , no desde fuera.
La clase debe definir las propiedades $titular y $saldo, y los métodos:

1. depositar: deposita dinero en la cuenta
2. Retirar: si hay saldo, retira donero de la cuenta y devuelve verdadero, en otro caso false.


Definida la clase, atributos y métodos, crea un script en PHP que la utilice:
1. Depositando dinero
2. Retirando dinero
3. Mostrando información sobre el titular
4. Mostrando información sobre el saldo
*/
class CuentaBancaria{

    /**
     * @param float $saldo
     * @param string $titular
     * Constructor
     */
public function __construct( public private(set) float $saldo ,
                             public string $titular)
{
}


    /**
     * @param $saldo
     * @return void
     * Mete saldo
     */
    public function depositar($saldo):void
{
    $this->saldo += $saldo;
}

    /**
     * @param $cantidad
     * @return bool
     * Retira cantidad y devuelve true o false
     */
public function retirar($cantidad):bool
{
    $ok = false;
    if($cantidad<= $this->saldo):
        $this->saldo -= $cantidad;
        $ok = true;

        endif;
        return $ok;
}
















}