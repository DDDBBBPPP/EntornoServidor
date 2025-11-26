<?php
    namespace Clases ;

   final class BaseDatos
    {
        private const DBHOST = "db" ;
        private const DBUSER = "root" ;
        private const DBPASS = "root" ;
        private const DBNAME = "prueba" ;
        private static ?BaseDatos $instancia = null ;
        private ?\PDO\Mysql $pdo ;
        private \PDOStatement $stmt;




        private function __clone() {}
        private function __construct () {

            try {

                $dns = "mysql:host=db;dbname=prueba;charset=utf8"; // El db es el nombre del servicio

                $pdo = \PDO::connect($dns, self::DBUSER, self::DBPASS); // Devuelve un objeto de clase PDO \mysql

            }catch(\PDOException $pdoe) {
                die ("**ERROR: " . $pdoe->getMessage());
            }
        }



       public static function conectar(): BaseDatos
       {
           if (self::$instancia === null) self::$instancia = new BaseDatos ;
           return self::$instancia;
       }


       public function consulta(string $sql, array $params): void
       {
           $stmt = $this->pdo->prepare ($sql);
           $stmt->execute($params);
       }

       public function todos(): array
       {
           return $this->stmt->fetchALL(\PDO::FETCH_ASSOC);
       }


       public function fila(string $clase): ?object
       {
           return $this->stmt->fetchObject($clase) ;
       }

       public function cerrar():void
       {
           $this->pdo = null;
       }

    }