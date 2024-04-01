<?php

//FUNCIONES DE STRING

$familia = "david|vero|patita|uma";

// EXPLODE PARA CORTAR EL STRING CON PONIENDO UN CARACTER QUE ENCUENTRE EN
// EL STRING

var_dump(explode("|", $familia, -1));
echo "<br/>";
var_dump(explode("|", $familia, 3));
echo "<br/>";

$datos = "moron,ciudad,departamento,home office";

$datosArray = explode(",", $datos);

echo $datosArray[0];
echo "<br/>";

//STRTOUPPER PASAR A MAYUSCULA UN STRING

$nombre = "David Cris";

$nombreMayuscula = strtoupper($nombre);
echo $nombreMayuscula;
echo "<br/>";

$nombreMayuscula = strtolower($nombreMayuscula);
echo $nombreMayuscula;
