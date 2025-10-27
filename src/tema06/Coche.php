<?php

class Coche {



    public private(set) string $motor; // Visibilidad asimétrica

//public string $marca;
//public int $anio;

    /*
    public function __construct(string $marca, int $anio)
    {
        $this->marca = $marca;
        $this->anio = $anio;

    }
*/

    // Esto es promoción de propiedades

public function __construct(private int $anio, private readonly string $matricula,
                            private string $marca = "Seat"){
   // $this->motor = "diesel";
}


    /**
     * @return string
     * Obtiene matricula
     */
public function getMatricula(): string
{
    return $this->matricula;
}


    /**
     * @return void
     */
public function arrancar():void
{
    echo "El coche está arrancando....<br/>";

}


    /**
     * @param string $nuevaMarca
     * @return void
     * Setear marca
     */
public function setMarca(string $nuevaMarca): void
{
    $this->marca = $nuevaMarca;
}

    /**
     * @return void
     */
    public function detener():void
    {
        echo "El coche está parándose....<br/>";

    }

}



?>