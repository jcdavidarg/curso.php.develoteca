<?php


if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if ($valorA != $valorB) {
        echo "El valor de A es diferente al valor de B";
    } else {
        echo "El valor de A es igual al de B";
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

    <form action="./ejercicio12.php" method="post">
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