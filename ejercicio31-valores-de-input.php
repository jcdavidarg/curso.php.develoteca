<?php

$txtNombre = "";
$rdgLenguaje = "";
$chkPhp = "";
$chkHtml = "";
$chkCss = "";

if ($_POST) {

    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : ""; //IF TERNARIO

    $chkPhp = (isset($_POST["chkPhp"]) == "si") ? "checked" : "";
    $chkHtml = (isset($_POST["chkHtml"]) == "si") ? "checked" : "";
    $chkCss = (isset($_POST["chkCss"]) == "si") ? "checked" : "";


    print_r($_POST);
    echo "<br/>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST) { ?>
        <strong>Hola</strong>: <?php echo $txtNombre;?>
        <br/>
        <strong>Tu lenguaje preferido es</strong>: <?php echo $rdgLenguaje; ?>
    <?php } ?>

    <form action="./ejercicio31-valores-de-input.php" method="post">
        
        Nombre:<br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>
        Tecnologias preferidas: <br/>
        <br/><input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked": ""; ?> name="lenguaje" value="php" id=""> php
        <br/><input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked": ""; ?> name="lenguaje" value="html" id=""> html
        <br/><input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked": ""; ?> name="lenguaje" value="css" id=""> css
        <br/>

        Estas aprendiendo... <br/>
        <br/><input type="checkbox" <?php echo $chkPhp ?> name="chkPhp" value="si" id=""> php
        <br/><input type="checkbox" <?php echo $chkHtml ?> name="chkHtml" value="si" id=""> html
        <br/><input type="checkbox" <?php echo $chkCss ?> name="chkCss" value="si" id=""> css
        <br/>

        <input type="submit" value="Enviar información">

    </form>    
</body>
</html>