<?php

// Definimos una interfaz que define un método para obtener y establecer un nombre
interface Nombreable
{
    public function getNombre();
    public function setNombre($nombre);
}

// Clase padre que implementa la interfaz
class Animal implements Nombreable
{
    protected $nombre;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

// Clase hija que también implementa la interfaz
class Perro extends Animal
{
    private $raza;

    public function getRaza()
    {
        return $this->raza;
    }

    public function setRaza($raza)
    {
        $this->raza = $raza;
    }
}

// Crear una instancia de la clase Perro y establecer su nombre y raza
$perro = new Perro();
$perro->setNombre("Fido");
$perro->setRaza("Labrador");

// Acceder al nombre y raza del perro
echo "Nombre del perro: " . $perro->getNombre() . "\n";
echo "Raza del perro: " . $perro->getRaza() . "\n";
