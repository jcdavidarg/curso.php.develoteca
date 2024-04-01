<?php

if ($_POST) {

    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];
    $numberDni = $_POST["numberDni"];

    echo "Hola " . $txtNombre . " " . $txtApellido . " su dni es " . $numberDni;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="" />
        <br />
        Apellido:
        <input type="text" name="txtApellido" id="" />
        <br />
        Dni
        <input type="number" name="numberDni" id="" />
        <br />
        <input type="submit" value="Enviar" />
    </form>

</body>

</html>