<?php

abstract class Usuario
{

    private string $nombre;
    private static int $totalUsuarios = 0;

    /**
     * @param string $nombre
     */
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        self::$totalUsuarios++;
    }

    public function getNombre():string
    {
        return $this->nombre;
    }


    abstract public function acceder(): void;

    public final  static function  obtenerTotalUsuarios():int
    {
        return self::$totalUsuarios;
    }
}