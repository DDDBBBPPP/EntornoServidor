<?php

class Libro{



    public function __construct(public private(set) string $titulo = "Librazo",
                                 public private(set) string $autor = "YO",
                                 public readonly string $publicacion =  "buena",
                                 public private(set) int $stock = 20
){}

    /**
     * @return void
     * Vende un stock si hay
     */
    public function vender():void
    {
        $this->stock = ($this->stock>0)?$this->stock- 1:$this->stock;
    }

    /**
     * @param int $cantidad
     * @return void
     * Repone la cantidad que le digas
     */
    public function reponer(int $cantidad):void
    {
      $this->stock += abs($cantidad);
    }



}