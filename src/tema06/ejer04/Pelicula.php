<?php

class Pelicula
{


    public function __construct(private readonly string $id,
                                public private(set) string $titulo,
                                public private(set) string $director,
                                public private(set) int $estreno,
                                public private(set) int $stock = 0)
    {

    }


    public function vender(int $unidades = 1): int|false
    {
        $ok = false;
        if ($this->stock >= $unidades):
            $this->stock -= abs($unidades);
            $ok = $this->stock;

        endif;
        return $ok;
    }




public function reponer(int $unidades = 1): int
{
    $this->stock += abs($unidades);
    return $this->stock;
}


public function renombrar(?string $titulo):void
    {
        $this->titulo = $titulo ?? $this->titulo;
}


public function infoCorta():string
{
    return $this->titulo . " " . "$this->director". " ". $this->estreno. " "
        . $this->stock;
}

}

?>