<?php


if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if (($valorA != $valorB) && ($valorA > $valorB)) {
        echo "El valor de A es diferente al de B y tambien es mayor";
    } else if (($valorA == $valorB) || ($valorA > $valorB)) {
        echo "El valor es igual o mayor";
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

    <form action="./ejercicio10.php" method="post">
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