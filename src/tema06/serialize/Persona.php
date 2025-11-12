<?php

class Persona
{
    public function __construct(private string $nombre,
                                private int    $edad,
                                private string $sexo)
    {

    }

//    public function __serialize(): array
//    {
//        return ["nombre" => $this->nombre];
//    }

    public function __unserialize(array $data): void
    {
        $this->nombre = $data["nombre"];
        $this->edad = 1;
    }
}


