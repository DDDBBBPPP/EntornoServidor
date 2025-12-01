<?php

    namespace Clases\Logic;
    final class Sesion
    {
        public static function login(string $email, string $pass)
        {

        }

        /**
         * @return void
         */
        public static function cerrar(): void
        {
            # cerramos la sesión
            $_SESSION = [] ;
            session_destroy() ;

            # redirigimos a la página principal
            Request::redirect("index.php") ;
        }
    }