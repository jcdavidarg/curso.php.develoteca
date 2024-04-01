<?php

class Persona3
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

$objAlumno = new Persona3();

$objAlumno->asignarNombre("Cristian");
echo $objAlumno->nombre;
echo "<br/>";
echo $objAlumno->mostrarEdad();
echo "<br/>";
/* echo $objAlumno->edad; */
/* echo $objAlumno->altura; */
//NO SE PUEDE ACCEDER PORQUE ES PRIVADA Y SOLO PUEDE 
// SER UTILIZADA O ACCEDIDA POR LOS METODOS DE LA CLASE
echo $objAlumno->datos();
