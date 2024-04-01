<!-- MIENTRAS NO ABRA ETIQUETAS
PHP VA A TOMAR TODO COMO
CODIGO HTML
 -->

<?php

// RECIBIR INFORMACION DEL FORMULARIO HTML (METODO POST)

if ($_POST) { // $_POST:    ENVIO POR FORMULARIO

    $nombre = $_POST["txtNombre"];
    echo "Hola " . $nombre;
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
    <form action="ejercicio2.php" method="post">
        <!-- POST PARA ENVIAR LA INFORMACION DE LAS INPUT NO POR LA URL, LOS RECIBE Y LOS GUARDA -->
        <label for="nombre">Nombre: </label>
        <input type="text" name="txtNombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>