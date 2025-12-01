<?php

class Cliente extends Usuario
{
    private ?string $telefono;
    private ?string $direccion;

    public function __construct(
        int $id_usuario,
        string $nombre,
        ?string $apellidos,
        string $email,
        string $password,
        string $fecha_registro,
        string $telefono = null,
        string $direccion = null
    ) {
        parent::__construct(
            $id_usuario,
            $nombre,
            $apellidos,
            $email,
            $password,
            $fecha_registro,
            "cliente"
        );

        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }
}

