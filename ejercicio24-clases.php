<?php

//LA CLASE ES COMO UNA PLANTILLA, EL POO SON TODOS OBJETOS
//MOLDEAR LA REALIDAD DE COSAS QUE EXISTEN EN LA REALDIAD PARA REPRESENTARLOS
//COMO OBJETOS

class persona4
{

    public $nombre; //PROPIEDAD

    public function asignarNombre($nuevoNombre) // ACCIONES O MÉTODOS
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }
}

$persona1 = new persona4();
$persona1->asignarNombre("David");
$persona1->imprimirNombre();

echo "<br/>";

$objAlumno = new persona4();
$objAlumno->asignarNombre("Veronica");
$objAlumno->imprimirNombre();

echo "<br/>";

print_r($persona1);

echo "<br/>";

echo $objAlumno->nombre;
