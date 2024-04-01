<?php

session_start();

// LA VARIABLE DE SESION ES UN ARRAY QUE GUARDA LOS VALORES EN UN INDICE NO NUMERICO 
// Y ES REUTILIZABLE SIEMPRE Y CUANDO INCIEMOS EL LA VARIABLE DE SESSION

$_SESSION["usuario"] = "David";
$_SESSION["estatus"] = "logueado";

//print_r($_SESSION);

echo "Sesion iniciada" . "<br/>";

echo "Usuario: " . $_SESSION["usuario"] . " Estatus: " . $_SESSION["estatus"] . "<br/>";
