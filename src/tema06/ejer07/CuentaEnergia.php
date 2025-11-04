<?php

class CuentaEnergia
{


    public protected(set) float $saldo;

    public bool $activa {
        set {
            if (is_bool($value)) $this->activa = $value;
        }
        get {
            return $this->activa;
        }
    }

    /**
     * @param string $id
     * @param string $titular
     * Constructor
     */
    public function __construct(public private(set) string $id,
                                public readonly string $titular)
    {
        $this->saldo = 0;
        $this->activa = true;
    }


    /**
     * @param float $cantidad
     * @return void
     * Aumenta el saldo
     */
    public function generar(float $cantidad): void
    {
        $this->saldo += ($this->activa) ? abs($cantidad) : 0;
    }


    /**
     * @param float $cantidad
     * @return bool
     *Reduce el saldo si es posible
     */
    public function consumir(float $cantidad): bool
    {
        $efectuado = false;
        if ($this->saldo >= abs($cantidad)):
            $this-> saldo -= abs($cantidad);
            $efectuado = true;
        endif;

        return $efectuado;
    }


    /**
     * @return string
     * Es un toString literal
     */
    public final function  resumen():string
    {
        return "Titular: ". $this->titular. "<br/>" .
                "Saldo: ". $this->saldo . "<br/>" .
                "Estado: ". (($this->activa)?"activa":"inactiva");
    }


    /**
     * @return string
     * El toString
     */
   public function __toString(): string
   {
       return $this->resumen();
   }


   public function __call(string $name, array $arguments)
   {
        echo "Operación no disponible";
   }


}

?>