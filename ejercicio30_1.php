<?php

session_start();

//INICIO LA VARIABLE PARA REUTILIZAR LO QUE YA INICIE EN OTRO ARCHIVO

if (isset($_SESSION["usuario"])) {
    echo "Usuario: " . $_SESSION["usuario"] . " Estatus: " . $_SESSION["estatus"] . "<br/>";
} else {
    echo "No hay datos";
}
