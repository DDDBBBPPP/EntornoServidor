<?php
require_once "MesesDelAnio.php";


class Evento
{

    public MesesDelAnio $mes;


    public function esMesVerano():bool
    {
        return $this->mes->name == "JUNIO" or $this->mes->name == "JULIO" or $this->mes->name == "AGOSTO";
    }




}