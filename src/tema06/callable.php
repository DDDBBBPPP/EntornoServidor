<?php

# EL tipo callable identifica cualquier expresion que pueda ser utilizada como una función.


function mostrar(callable $funcion,int $a,int $b)
{
    echo "EL resultado de aplicar la función es: ". $funcion($a,$b)."<br/>" ;
}


$suma = function(int $a, int $b){
   return $a + $b ;
};

$producto = function(int $a, int $b) { return $a * $b ; } ;


mostrar($suma,8,3);

mostrar($producto,8,3);











// CLASE DE EJEMPLO
class MiError
{
    private $mensaje ;

    public function __construct(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

   public function  getMensaje():string{
        return $this->mensaje;
   }

    public function foo(string $mensaje, string $tipo): string
    {
        return "<h2>                     <h2/>";
    }


}





#Hacer array_filter.

$numeros = [1,2,3,4,5,6,7,8,9,10];

function miFiltro(array $datos,callable  $funcion): array
{
    $otros = [];
    foreach ($datos as $item){

        ($funcion($item))?array_push($otros,$item):"";

    }
    return  $otros;
}

$pares = miFiltro( $numeros,  function($cha){

    return $cha%2 == 0;
});

print_r($pares);



#Un callable puede ser una funcion anónima, o esto tambien.
echo "<br/>";
function muestra(callable $funcion, string $cadena): void
{
    echo $funcion($cadena). "<br/>";
}

 function divertida(string $cadena): string
{
    $resultado = "";
   for($i=0;$i<strlen($cadena);$i++):
        $resultado .= ($i%2==0)?strtolower($cadena[$i]):strtoupper($cadena[$i]);
   endfor;
        return $resultado ;
} ;

muestra("strlen","Hola Mundo!");
muestra("strtolower", "COMO ESTan ustedes.");
muestra("ucfirst", "COMO ESTan ustedes.");

muestra("divertida","Hola Mundo!");


 // el callable puede ser un metodo de un objeto.
$error = new MiError(" Mi error, mi tesorooooo.");
$foo =
muestra([$error,"formatear"]);

