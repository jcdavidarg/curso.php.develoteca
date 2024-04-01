<?php

if ($_GET) {
    $nombre = $_GET["apellido"];

    /* echo "Hola " . $nombre; */
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>BIENVIDO</h1>
        <p>Este es el sitio del Sr. <?php echo $nombre ?>.</p>
        
    </body>
    </html><?php
}?>
