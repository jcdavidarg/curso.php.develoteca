<?php

$jsonCnt = '[
    {"nombre": "David", "apellido": "Jaimez"},
    {"nombre": "Veronica", "apellido": "Llorente"}
    ]';// CUANDO CONSUMO APIS SUELE VENIR EL JSON EL STRING

$resultado = json_decode($jsonCnt); // CON ESTA FUNCION LA TRASFORMO A ARRAY U OBJETO PARA LEERLA 

/* print_r($resultado);
echo "<br/>";
echo "<br/>"; */

foreach($resultado as $persona){
    /* print_r($persona->nombre);
    echo "<br/>"; */
    echo $persona->nombre . " " . $persona->apellido . "<br/>";
}
?>