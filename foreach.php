<?php

// EL FOREACH RECORE LOS ELEMENTOS DEL ARRAY Y SE FUE OBTENER
// O LA CLAVE O EL VALOR

$array = array(1, 2, 3, 4, 5);

/* foreach ($array as &$valor) {
    $valor = $valor * 2;
} */

echo "<br/>";

foreach ($array as $clave => $valor) {
    echo "El indice de " . $valor . " es: " . $clave . "<br/>";
}

print_r($array);

echo "<br/>";

$nuevoArray = [];

foreach ($array as $valor) {
    $nuevoArray[] = $valor * 2;
}

print_r($nuevoArray);
