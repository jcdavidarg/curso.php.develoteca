<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false
    )
); //PARA PERMITIR LA CONEXION CON SSL, PARA ENTORNOS EN DESARROLLO NO PRODUCCION

//print_r($opciones);

$respuesta = file_get_contents($url, false, stream_context_create($opciones)); //PERMITE LEER EL CONTENIDO, LO ALMACENAMOS

$objRespuesta = json_decode($respuesta); // LO DECODIFICAMOS LO CONVERTIMOS EN UN OBJETO

//print_r($objRespuesta); //TODA LA RESPUESTA ENTERA

/* foreach ($objRespuesta->list as $video) {
    print_r($video);
    echo "<br/>";
    print_r($video->title);
    print_r($video->channel);
} */

?>

<ul>
    <?php foreach ($objRespuesta->list as $video) { ?> 
        <li><?php echo $video->title; ?> | <?php echo $video->channel; ?></li>
    <?php } ?>
</ul>
