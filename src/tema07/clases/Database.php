<?php

    final class Database
    {
        private const DBHOST = "db" ;
        private const DBUSER = "root" ;
        private const DBPASS = "root" ;
        private const DBNAME = "prueba" ;
        private function __construct()
        {

        }

        private function __clone()
        {
        }

        public static function conectar(): ?\PDO\MySql
            {
                    try
                {


                $dns = "mysql:host=".self::DBHOST.";dbname=".self::DBNAME.";charset=utf8"; // El db es el nombre del servicio

                return \PDO::connect($dns, self::DBUSER, self::DBPASS);


                }catch
                (PDOException $pdoe) {
                        die ("**ERROR: " . $pdoe->getMessage());
                    }
            }
    }