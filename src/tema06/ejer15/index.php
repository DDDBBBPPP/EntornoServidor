<?php
require_once "Evento.php";

$eventazo = new Evento();

$eventazo->mes = MesesDelAnio::MARZO;

var_dump($eventazo->esMesVerano());