<?php

class Producto
{
    public string $nombre {
        set {
            $this->nombre = ucfirst(strtolower($value));
        }
        get {
            return $this->nombre;
        }
    }

    public float $precio;
    public string $categoria;



    public function __construct(string $nombre, float $precio, string $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }


    public function __toString(): string
    {
        return "Info <br/> Nombre: ". $this->nombre . "<br/>Precio: "
            . $this->precio. "<br/>Categoria: ". $this->categoria;
    }


}


?>