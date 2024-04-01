<?php

/**
 * Clase base para representar un electrodoméstico.
 */
class Electrodomestico
{
    public $nombre;
    protected $tipo;
    private $pais;

    /**
     * Constructor para la clase Electrodomestico.
     *
     * @param string $nombre El nombre del electrodoméstico.
     * @param string $tipo El tipo de electrodoméstico.
     */
    public function __construct($nombre, $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    /**
     * Establece el país de origen del electrodoméstico.
     *
     * @param string $pais El país de origen.
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

     /**
     * Obtiene el país de origen del electrodoméstico.
     *
     * @return string El país de origen.
     */
    public function getPais()
    {
        return $this->pais;
    }
}

$electro_1 = new Electrodomestico("televisor", "visual");
$electro_1->setPais("Argentina");

echo "Pais: " . $electro_1->getPais(); // Imprime "Argentina"

/**
 * Clase para representar una computadora que es un tipo de electrodoméstico.
 */
class Computadora extends Electrodomestico
{
    private $sku;

    /**
     * Establece el SKU de la computadora.
     *
     * @param int $sku El SKU de la computadora.
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * Obtiene el SKU de la computadora.
     *
     * @return int El SKU de la computadora.
     */
    public function getSku()
    {
        return $this->sku;
    }

}
echo "<br/>";

$computadora_1 = new Computadora("Mac Pro", "laptop");
$computadora_1->setSku(112345);

echo "Nombre: " . $computadora_1->nombre . "<br/>";
echo "SKU: " . $computadora_1->getSku();

