<?php

namespace Clases\Logic;

class Request
{
    public static function post(string $campo): ?string
    {
        return $_POST[$campo] ?? null;
    }

    public static function redirect(string $ruta): void
    {
        header("Location: $ruta");
        exit;
    }
}
