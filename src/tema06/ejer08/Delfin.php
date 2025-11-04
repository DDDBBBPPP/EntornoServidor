<?php

class Delfin extends Animal
{

    public int $saltos;


    public function __construct(string $especie, string $habitat)
    {
        parent::__construct($especie, $habitat);
        $this->saltos = 0;
    }


    public function saltar(): string
    {
        $cadena = "No se ha podido saltar";
        if ($this->vivo and $this->peso > 0):

            $porcentaje = match (true) {
                $this->saltos < 5 => 0.002,
                $this->saltos < 10 => 0.003,
                $this->saltos < 30 => 0.004,
                $this->saltos >= 30 => 0.005,
                default => 1
            };
        $this->saltos++;
            $this->peso -= $this->peso*$porcentaje;

            $cadena = "Ha saltado y ahora pesa ". $this->peso . " kgs";
        endif;
        return $cadena;
    }


    public function __invoke(string $accion): void
    {
        $accion = strtolower($accion);

        if ($accion === "saltar") {
            echo "¡El delfín realiza un salto espectacular!<br>";
        } else {
            // Si no es "saltar", usamos el comportamiento original del Animal
            parent::__invoke($accion);
        }
    }

}


?>