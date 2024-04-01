<?php


if ($_POST) {

    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    //SUMA
    $suma = $valorA + $valorB;
    //RESTA
    $resta = $valorA - $valorB;
    //DIVISION    
    $division = $valorA / $valorB;
    //MULTIPLICACION
    $multiplicacion = $valorA * $valorB;
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

    <form action="./ejercicio8.php" method="post">
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

    <br />
    <br />

    <h2>Suma = <?php echo $suma; ?></h2>
    <h2>Resta = <?php echo $resta; ?></h2>
    <h2>Division = <?php echo $division; ?></h2>
    <h2>Multiplicacion = <?php echo $multiplicacion; ?></h2>

</body>

</html>