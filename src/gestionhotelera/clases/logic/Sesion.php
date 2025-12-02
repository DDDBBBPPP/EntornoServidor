<?php

namespace Clases\Logic;

class Sesion
{
    public static function iniciar(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set(string $clave, mixed $valor): void
    {
        $_SESSION[$clave] = $valor;
    }

    public static function get(string $clave)
    {
        return $_SESSION[$clave] ?? null;
    }

    public static function cerrar(): void
    {
        $_SESSION = [];
        session_destroy();
        header("Location: cerrar.php");
        exit;
    }
}
