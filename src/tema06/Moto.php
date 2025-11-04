<?php

class Moto
{


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

    public function __construct(private int    $anio, private readonly string $matricula,
                                private string $marca = "Seat")
    {
        // $this->motor = "diesel";
    }

    /**
     * @param string $propiedad
     * @return mixed
     * Todos las propiedades son publicas para lectura
     */
    public function __get(string $propiedad): mixed
    {
        if (property_exists($this, $propiedad)):
            return $this->$propiedad; //
        else:
            return throw new Exception("No existe");
        endif;
    }


    /**
     * @param string $propiedad
     * @param mixed $valor
     * @return mixed|void
     * Magico
     */
    public function __set(string $propiedad, mixed $valor)
    {
        switch ($propiedad):
            case "marca":
                return $this->marca = $valor;
                break;
            case "anio":
                return $this->marca = $valor;
                break;
        endswitch;

    }


    /**
     * @return void
     */
    public function arrancar(): void
    {
        echo "El coche está arrancando....<br/>";

    }


    /**
     * @return void
     */
    public function detener(): void
    {
        echo "El coche está parándose....<br/>";

    }

    /**
     * @return void
     * Permite tratar el objeto como si fuera una fucnion
     */
    public function __invoke()
    {
        echo "Barras gordo";
    }


    public function __toString(): string
    {
        return "$this->matricula, $this->marca,$this->anio<br/>";
    }


    public function __clone() // Si lo pones private no se hace.
    {
//       $this->direccion =   clone $this->direccion ;
// ^Para hacer una copia que pueda ser unica
        // COpia el objeto del objeto que quiero clonar al objeto del mismo tipo dentro del otro.
    }


}

$moto = new Moto(1222, "fsd234", "Honda");
echo $moto->__get("marca");
echo "<br/>";
echo $moto;
echo "<br/>";
$moto->marca = "Toyota";
echo $moto;


try {
    echo $moto->ruedas;
} catch (Exception $e) {
    echo $e->getMessage();
}

#INVOKE
echo "<br>";

$moto();


#Clone

// $moto2 = $moto; Se convierten en lo mismo, no vale para hacer una copia No hace clonado profundo
// No clona objeto que esta dentro de otro.

$moto2 = clone $moto;

$moto2->marca = "Citroen";
echo "<br>";
echo "Moto: " . $moto;
echo "<br>";
echo "Moto2: " . $moto2;
?>