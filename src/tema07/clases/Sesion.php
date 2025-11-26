<?php
    // HACER SESION CON SINGLETON
    // 1 Login 2. Comprobar Sesion activa
    // 3 Expirada
    //4 Logout
    // 5 Renovar sesion
    namespace Clases ;
    require_once "../autoload.php" ;
    final class Sesion
    {

        public static function login (): void
        {

        }

        public static function cerrar (): void
        {
            $_SESSION = [] ;
            session_destroy() ;
           Request::redirect("index.php") ;

        }

    }