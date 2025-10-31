<?php


class SensorIoT
{


    private array $historial;


    /**
     * @param string $id
     * @param string $ubicacion
     * @param string $tipo
     * @param float|null $valor
     * Constructor
     */
    public function __construct(public readonly string $id,
                                public private(set) string $ubicacion,
                                public private(set) string $tipo,
                                public private(set) ?float $valor = null,)
    {
        $this->historial = [];
    }

    /**
     * @param float $valor
     * @return float
     * Actualizar valor y array.
     */
    public function actualizarValor(float $valor): float
    {
        $this->valor = $valor;

        array_push($this->historial, $valor);

        if (count($this->historial) > 10):
            array_shift($this->historial);
        endif;
        return $valor;
    }



    public function mediaHistorial() :float
    {
        return (count($this->historial)==0)?0:array_sum($this->historial)/count($this->historial);
    }

}

