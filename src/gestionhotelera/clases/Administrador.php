<?php

class Administrador extends Usuario
{
    private string $nivel_acceso; // 'basico' | 'super'

    public function __construct(
        int $id_usuario,
        string $nombre,
        ?string $apellidos,
        string $email,
        string $password,
        string $fecha_registro,
        string $nivel_acceso = 'basico'
    ) {
        parent::__construct(
            $id_usuario,
            $nombre,
            $apellidos,
            $email,
            $password,
            $fecha_registro,
            "administrador"
        );

        $this->nivel_acceso = $nivel_acceso;
    }
}

