<?php
require_once "Usuario.php";
require_once "iAutenticable.php";
require_once "AccionesComunes.php";

class Cliente extends Usuario implements iAutenticable
{
    use AccionesComunes;
    /**
     * @param $nombre
     * Constructor
     */
    public function __construct(string $nombre)
    {
        parent::__construct($nombre);
    }

    /**
     * @return void
     * Acceder
     */
    public function acceder(): void
    {
        echo "El cliente {$this->getNombre()} ha accedido al sistema.<br/>";
    }



    /**
     * @return void
     * Autenticar
     */
    public function autenticar(): void
    {
        echo "Autenticando al cliente {$this->getNombre()}<br/>";
    }





}