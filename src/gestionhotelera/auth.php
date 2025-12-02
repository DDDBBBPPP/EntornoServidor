<?php

require_once "autoload.php";

use Clases\Logic\Sesion;
use Clases\Logic\Request;

Sesion::iniciar();

// si no hay usuario → volver al login
if (!Sesion::get("usuario")) {
    Request::redirect("login.php");
}

// comprobamos timeout (2000 seg)
if (time() - Sesion::get("tiempo") > 2000) {
    Sesion::cerrar();   // destruye sesión y redirige a cerrar.php
}

// refrescamos tiempo
Sesion::set("tiempo", time());
