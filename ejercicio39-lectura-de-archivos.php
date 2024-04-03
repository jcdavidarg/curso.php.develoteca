<?php

$nombreArchivo = "archivo.txt";

$contenidoArchivo = " Hola, saludos";

$archivoACrear = fopen($nombreArchivo, "w"); //ABRO ARCHIVO

fwrite($archivoACrear, $contenidoArchivo); //LE AGREGO CONTENIDO AL ARCHIVO

fclose($archivoACrear); //CIERRO EL ARCHIVO

//SE CREA EN LA MISMA RUTA QUE ESTOY 
?>