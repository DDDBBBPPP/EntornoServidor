<?php

class Leon extends Animal
{
    public int $manada;


    /**
     * @param string $especie
     * @param string $habitat
     * Constructor heredado
     */
    public function __construct(string $especie, string $habitat)
    {
        parent::__construct($especie, $habitat);
        $this->manada = 0;
    }


    /**
     * @return bool
     * Caza y pierde peso.
     */
    public function cazar(): bool
    {
        $resultado = false;
        $valor = rand(0, 1) ; // O mt_rand(0,1) para mejor aleatoriedad
        if ($valor == 1):
            if($this->peso>0)$this->peso -= ($this->peso*0.02);
            echo "Cazado con éxito y ha perdido un 2% de peso si lo tenía, ahora pesa " . $this->peso;
            $resultado = true;
        else:
            if($this->peso>0)$this->peso -= ($this->peso*0.05);
            echo "No ha conseguido cazar y ha perdido un 5% de peso si lo tenía, ahora pesa " . $this->peso;
        endif;

        return $resultado;
    }




    public function alimentar(float $kgs): void
    {
        $exito = $this->cazar();

        if ($this->vivo) {
            // si tuvo éxito, gana un 20 % más
            if ($exito) {
                $kgs *= 1.2;
            }

            $this->peso += abs($kgs);
            echo "Ñam Ñam Ñam<br>";
        }
    }


}


?>