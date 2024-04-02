<?php

$uploads_dir = "./uploads/";

if($_POST)
{
    print_r($_POST);
    print_r($_FILES["archivo"]["name"]); // SELECCIONO EL INPUT MEDIANTE SU NAME Y ELIGO SEGUN LO QUE TENGA DENTRO

    move_uploaded_file($_FILES["archivo"]["tmp_name"], $uploads_dir . $_FILES["archivo"]["name"]); //MOVER ARCHIVOS SUBIDOS, TEMPORALES A RUTAS
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

<form action="./ejercicio32-input-file.php" enctype="multipart/form-data" method="post"> <!-- PARA MANEJAR ARCHIVOS -->
    Imagen:
    <input type="file" name="archivo" id="">
    <br/>
    <br/>
    <input type="submit" name="enviar" value="Enviar informacion">

</form>
    
</body>
</html>