<?php

class Usuario
{
    protected int $id_usuario;
    protected string $nombre;
    protected ?string $apellidos;
    protected string $email;
    protected string $password;
    protected string $fecha_registro;
    protected string $tipo_usuario;

    public function __construct(
        int $id_usuario,
        string $nombre,
        ?string $apellidos,
        string $email,
        string $password,
        string $fecha_registro,
        string $tipo_usuario
    ) {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->fecha_registro = $fecha_registro;
        $this->tipo_usuario = $tipo_usuario;
    }
}

