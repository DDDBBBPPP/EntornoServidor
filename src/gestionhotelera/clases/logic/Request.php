<?php

    namespace Clases\Logic ;

    final class Request
    {

        private function __construct() { }

        /**
         * @param string $url
         * @return void
         */
        public static function redirect(string $url): never
        {
            header("Location: {$url}") ;
            exit() ;
        }
    }
