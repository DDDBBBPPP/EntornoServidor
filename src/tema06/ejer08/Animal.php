<?php

class Animal
{
    public readonly string $especie;
    public protected(set) int $edad {

        get {
            $resultado = $this->edad;
            if (strcasecmp($this->habitat, "selva") or strcasecmp($this->habitat, "selva")):
                $resultado += $resultado + 2;
            endif;
            return $resultado;
        }
    }

    public protected(set) float $peso {
        set {
            if ($value < 0):
                $this->peso = 0;
            elseif(($this->peso*1.5>=$value)):
                $this->peso = $value;
            else:
                $this->peso*=1.5;
            endif;
        }


    }


    public bool $vivo;

    public readonly string $habitat;

    public Animal $companero;


}

?>