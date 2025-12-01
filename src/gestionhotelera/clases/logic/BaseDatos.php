<?php

namespace Clases\Logic ;

final class BASEDatos
{
    private const DBHOST = "db" ;
    private const DBUSER = "root" ;
    private const DBPASS = "root" ;
    private const DBNAME = "prueba" ;

    private function __clone() {}
    private function __construct() {}

    /**
     * @return \PDO\Mysql|null
     */
    public static function conectar(): ?\PDO\Mysql
    {
        try {
            $dsn = "mysql:host=".self::DBHOST.";dbname=".self::DBNAME.";charset=utf8";
            return \PDO::connect($dsn, self::DBUSER, self::DBPASS) ;

        } catch(\PDOException $pdoe) {
            die("**ERROR: " . $pdoe->getMessage()) ;
        }
    }
}