<?php


if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    /* //SUMA
    $suma = $valorA + $valorB;
    //RESTA
    $resta = $valorA - $valorB;
    //DIVISION    
    $division = $valorA / $valorB;
    //MULTIPLICACION
    $multiplicacion = $valorA * $valorB; */

    /* echo "<br/>" . $suma;
    echo "<br/>" . $resta;
    echo "<br/>" . $division;
    echo "<br/>" . $multiplicacion; */

    /* if ($valorA == $valorB) {

        echo "<br/>" . "El valor de A es igual al valor de B";

        if ($valorA == 4) {
            echo "<br/>" . "El valor es 4";
        }

        if ($valorA == 5) {
            echo "<br/>" . "El valor es 5";
        }
    } */

    if (($valorA == $valorB) && ($valorA == 4)) {

        echo "El valor de A es igual al valor de B y es 4";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>

    <form action="./ejercicio11.php" method="post">
        <label for="valorA">Valor A:
            <input type="text" name="valorA" id="">
        </label>
        <br />
        <br />
        <label for="valorB"> Valor B:
            <input type="text" name="valorB" id="">
        </label>
        <br />
        <br />
        <input type="submit" value="Calcular">
    </form>

</body>

</html>