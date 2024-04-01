<?php

$servidor = "localhost"; //ES IGUAL A 127.0.0.1
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `album`.`fotos` (`nombre`, `ruta`) VALUES ('jugando con la programacion', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexion establecida";
} catch (PDOException $error) {
    echo "Conexion erronea" . $error;
}
