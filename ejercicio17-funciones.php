<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>

  <form action="./ejercicio17.php" method="post">

    <input type="text" name="name">
    <input type="text" name="lastName">
    <input type="submit" value="enviar">

    <br />

    <p><?php

        if ($_POST) {

          $name = $_POST["name"];
          $lastName = $_POST["lastName"];

          function imprimirNombre($nombre, $apellido)
          {

            echo "Hola " . $nombre . " " . $apellido;
          }

          imprimirNombre($name, $lastName);
        }


        ?></p>

  </form>

</body>

</html>