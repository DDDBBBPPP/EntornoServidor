<?php
require_once "autoload.php";

use Clases\Logic\Sesion;

Sesion::iniciar();
Sesion::cerrar(); // destruye sesion y redirige
