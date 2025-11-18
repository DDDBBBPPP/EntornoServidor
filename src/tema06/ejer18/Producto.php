<?php

abstract class Producto
{
    protected string $nombre;
    protected float $precio;
    protected string $categoria;
    private static int $totalProductos = 0;



    public function __construct( string $nombre, float $precio, string $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        self::$totalProductos++;
    }


     abstract public  function mostrarDetalles():void;

    public function  aplicarDescuento(int $porcentaje):void
    {
        $this->precio -= $porcentaje*$this->precio/100;
    }


    public final static function obtenerTotalProductors():int
    {
        return self::$totalProductos;
    }

}