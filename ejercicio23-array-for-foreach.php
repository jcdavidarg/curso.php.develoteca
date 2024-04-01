<?php

// ARRAYS COMO OBTENER VALOR DE UN INDICE

$frutasNoNumericas = array("f" => "fresa", "m" => "manzana", "p" => "pera");
$frutas = array("fresa", "pera", "manzana");

echo $frutas[1];
echo "<br/>";
echo $frutasNoNumericas["m"];
echo "<br/>";

for ($i = 0; $i < count($frutas); $i++) { //COUNT PARA ARRAY Y OBJETOS

    echo $frutas[$i];
    echo "<br/>";
}


foreach ($frutasNoNumericas as $indice => $valor) {

    // echo $indice . "<br/>";

    echo "El valor: " . $valor . " tiene el indice: " . $indice . "<br/>";
}
