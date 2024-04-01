<?php

class Persona2
{
    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        return "Hola mi nombre es: " . $this->nombre;
    }
    public function mostrarEdad()
    {
        $this->edad = 33;
        return "Mi edad es: " . $this->edad;
    }
    public function datos()
    {
        $this->altura = 1.74;
        return "Mi nombre es " . $this->nombre . " edad " . $this->edad . " altura " . $this->altura;
    }
}

$objAlumno = new Persona2();

echo "INSTANCIA DE CLASE PERSONA";
echo "<br/>";
$objAlumno->asignarNombre("Cristian");
echo $objAlumno->nombre;
echo "<br/>";
echo $objAlumno->mostrarEdad();
echo "<br/>";
echo $objAlumno->datos();
echo "<br/>";
echo "<br/>";

echo "INSTANCIA DE CLASE TRABAJADOR, CLASE HIJA DE PERSONA";
echo "<br/>";

class Trabajador extends Persona2 //TRAIGO LAS PROPIEDADES Y METODOS DE LA CLASE Persona
{
    public $puesto;

    public function asignarPuesto($escribirPuesto)
    {
        $this->puesto = $escribirPuesto;
    }
    public function presentacion()
    {
        echo "Mi nombre es: " . $this->nombre . " y mi puesto es: " . $this->puesto;
    }
}

$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Veronica");
$objTrabajador->asignarPuesto("Diseñadora");
$objTrabajador->presentacion();
