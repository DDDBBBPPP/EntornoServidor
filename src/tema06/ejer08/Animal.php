<?php

class Animal
{
    public readonly string $especie;
    public protected(set) int $edad {

        get {
            $resultado = $this->edad;
            if (strcasecmp($this->habitat, "selva") or strcasecmp($this->habitat, "selva")):
                //SE PUEDE HACER CON UN in_array TAMBIÉN
                $resultado += $resultado + 2;
            endif;
            return $resultado;
        }
    }

    public protected(set) float $peso {
        set {
            if (!isset($this->peso)):                         #  si aún no está inicializado
                $this->peso = $value;                         #  se asigna directamente
            elseif ($value < 0):
                $this->peso = 0;
            elseif ($value > ($this->peso * 1.5)):
                $this->peso = $this->peso * 1.5;
            else:
                $this->peso = $value;
            endif;
        }
    }



    public bool $vivo {
        set {
            if ($this->edad > 20) {
                $this->vivo = false;
            } else {
                $this->vivo = $value;
            }
        }

    }

    public readonly string $habitat;

    public ?Animal $companero;



    /**
     * @param string $especie
     * @param string $habitat
     * El constructor
     */
    public function __construct(string $especie, string $habitat)

    {
        $this->edad = 0;
        $this->peso = 0;
        $this->habitat = $habitat;
        $this->vivo = true;
        $this->especie = strtolower($especie);
        $this->companero = null;

    }

    /**
     * @param $anios
     * @return void
     * Crece
     */
    public function crecer($anios): void
    {
        $this->edad += abs($anios);
    }

    /**
     * @param float $kgs
     * @return void
     * Aumenta peso
     */
    public function alimentar(float $kgs): void
    {
        $this->peso += ($this->vivo) ? abs($kgs) : 0;
        echo "Ñam Ñam Ñam";
    }

    /**
     * @return string
     * El toString
     */
    public function __toString(): string
    {
        $texto = ($this->vivo) ? "Vivo" : "Muerto";
        $companeroTxt = ($this->companero !== null)
            ? $this->companero->especie
            : "Sin compañero";

        return "Especie: {$this->especie}<br/>
            Habitat: {$this->habitat}<br/>
            Peso:    {$this->peso}<br/>
            Edad:    {$this->edad}<br/>
            Vivo: {$texto}<br/>
            Compañero: {$companeroTxt}";
    }


    /**
     * @return void
     *Permite convertir tratar el objeto como una funcion
     */
    public function __invoke(string $accion): void
    {
        $accion = strtolower($accion);

        switch ($accion) {
            case 'rugir':
                if ($this->especie === 'león' || $this->especie === 'tigre') {
                    echo "El {$this->especie} ruge con fuerza en la {$this->habitat}.\n";
                } else {
                    echo "El {$this->especie} no puede rugir.\n";
                }
                break;

            case 'nadar':
                if ($this->especie === 'pez' || $this->especie === 'delfín') {
                    echo "El {$this->especie} nada ágilmente en el mar.\n";
                } else {
                    echo "El {$this->especie} no sabe nadar.\n";
                }
                break;

            case 'volar':
                if ($this->especie === 'aguila' || $this->especie === 'loro') {
                    echo "El {$this->especie} vuela por los cielos.\n";
                } else {
                    echo "El {$this->especie} no puede volar.\n";
                }
                break;

            default:
                echo "El {$this->especie} no sabe cómo '{$accion}'.\n";
                break;
        }
    }

    /**
     * @param string $name
     * @return bool
     * Comprueba si existe una propiedad no accesible y si es nula o no
     */
    public function __isset(string $name): bool
    {
        $resultado = false;
        if (property_exists($this, $name)):
            $resultado = $this->$name != null;
        endif;
        return $resultado;
    }

    /**
     * @param string $name
     * @return void
     * Solo deja cambiar el peso a 0 si se quiere hacer unset.
     */
    public function __unset(string $name): void
    {
        if($name === "peso")$this->peso = null;
    }


    public function __clone(): void
    {
        if ($this->companero !== null):
            $this->companero = clone $this->companero;
        endif;
    }


}

?>