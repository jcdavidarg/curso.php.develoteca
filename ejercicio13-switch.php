<?php

if ($_POST) {

    $boton = $_POST["btnValor"];

    switch ($boton) {
        case 1:
            echo  "Presionó el botón 1";
            break;

        case 2:
            echo  "Presionó el botón 2";
            break;
        case 3:
            echo  "Presionó el botón 3";
            break;

        default:
            echo "Presionó otro botón";
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <form action="./ejercicio13-switch.php" method="post">

        <input type="submit" name="btnValor" value="1">
        <br />
        <input type="submit" name="btnValor" value="2">
        <br />
        <input type="submit" name="btnValor" value="3">
        <br />
        <input type="submit" name="btnValor" value="s">


    </form>
</body>

</html>