<?php

$servidor = "localhost"; //ES IGUAL A 127.0.0.1
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`"; // DECLARACION

    $sentencia = $conexion->prepare($sql); //PREPARO LA DECLARACION
    $sentencia->execute();  // LA EJECUTO

    $resultado = $sentencia->fetchAll(); // OBTENGO EL RESULTADO LO GUARDO EN LA VARIABLE

    //print_r($resultado);

    foreach ($resultado as $foto) { //LO MUESTRO
        print_r($foto/* ["nombre"] */);
        echo "<br/>";
    }

    echo "Conexion establecida";
} catch (PDOException $error) {
    echo "Conexion erronea" . $error;
}
