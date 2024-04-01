<?php

// LOS METODOS STATICS PUEDEN SER LLAMADOS SIN TENER UNA INSTANCIA DE LA CLASE

class UnaClase
{

    public static function unMetodo()
    {
        echo "Hola soy un metodo estatico";
    }
}

/* $obj = new UnaClase();
$obj->unMetodo(); */

UnaClase::unMetodo(); //PARA ACCEDER AL METODO DESDE LA CLASE
