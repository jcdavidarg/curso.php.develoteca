<?php

class Persona
{
    public $nombre;
    private $edad;
    protected $altura;

    function __construct($nombre, $edad, $altura) // EL CONSTRUCTOR DONDE DEFINO LOS PARAMETROS A PASAR AL CREAR UNA INSTANCIA
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }

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

$objAlumno = new Persona("David", 33, 174); //INSTANCIA O CREACION DE UN OBJETO A PARTIR DE UNA CLASE
//$objAlumno->asignarNombre("Cristian"); //LLAMANDO AL METODO DE LA CLASE
echo $objAlumno->imprimirNombre();
echo "<br/>";
echo $objAlumno->datos();
