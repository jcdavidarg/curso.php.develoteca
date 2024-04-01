<?php

$frutas = array("Fresa", "Pera", "Manzana");
echo "Array sin modificar: ";
print_r($frutas);
echo "<br/>";

array_push($frutas, "Uva", "Banana"); // SE PONE PRIMERO LA VARIABLE Y DESPUES EL VALOR A AGREGAR AL FINAL
echo "Array modificado: ";
print_r($frutas);
