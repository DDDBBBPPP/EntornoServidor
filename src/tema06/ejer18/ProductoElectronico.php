<?php
require_once "Producto.php";
require_once "RegistroAuditoria.php";
require_once "iImportable.php";
require_once "CategoriaProducto.php";



class ProductoElectronico extends Producto implements  iImportable
{


    use RegistroAuditoria;


    public function __construct(string $nombre, float $precio, string $categoria)
    {
        parent::__construct($nombre, $precio, $categoria);
    }

    public function mostrarDetalles(): void
    {
        echo "Nombre: ". $this->nombre . "<br/>Precio: ". $this->precio. "<br/>Categoria: ". $this->categoria;
    }

    public function calcularImpuesto(): float
    {
        $this->registrarAccion("Calcular Impuestos");
        return $this->precio*0.15;
    }


    public function aplicarDescuento(int $porcentaje): void
    {
        $this->registrarAccion("Aplicar Descuento");
        parent::aplicarDescuento($porcentaje);
    }


}


