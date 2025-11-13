<?php
require_once "Usuario.php";
require_once "iAutenticable.php";
require_once "AccionesComunes.php";
class Administrador extends Usuario implements iAutenticable
{
    use AccionesComunes;

    public function __construct(string $nombre)
    {
        parent::__construct($nombre);
    }

    /**
     * @return void
     * Acceder
     */
    public function acceder():void
    {
        echo "El administrador {$this->getNombre()} ha accedido al sistema.<br/>";
    }




    /**
     * @return void
     * Autenticar
     */
    public function autenticar(): void
    {
        echo "Autenticando el administrador {$this->getNombre()}.<br/>";
    }


}