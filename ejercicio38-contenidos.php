<?php

//$archivo = "./uploads/core_ultra_video.png";

//ABRIENDO UN ARCHIVO PARA LEER EL CONTENIDO
$archivo = "./contenido.txt"; // DONDE ESTA EL ARCHIVO

$archivoAbierto = fopen($archivo, "r"); // ABRIMOS EL ARCHIVO MODO LECTURA

$contenido = fread($archivoAbierto, filesize($archivo)); //LEEMOS EL CONTENIDO DE TODO EL ARCHIVO Y LA GUARDO EN LA VARIABLE

//header('Content-Type: image/png');

echo $contenido; // LA IMPRIMO

?>