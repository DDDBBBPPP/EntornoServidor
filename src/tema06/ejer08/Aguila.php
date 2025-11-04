<?php

class Aguila extends Animal{

    public float $altitud;


    public function __construct(string $especie, string $habitat)
    {
        parent::__construct($especie, $habitat);
        $this->altitud = 0;
    }


    /**
     * @param float $metros
     * @return void
     * Actualiza la altitud si se puede.
     */
    public function volar(float $metros):void
    {
        if($this->vivo and $metros>$this->altitud)$this->altitud = $metros;
    }


    public function __toString(): string
    {
        return parent::__toString().
            "<br/>Altura máxima en metros: ". $this->altitud;
    }
}


?>