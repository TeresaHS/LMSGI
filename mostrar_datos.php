<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Ponentes</title>
        <meta name="author" content="Teresa Hernandez Sanchez"/>
    </head>
    <body>
        <?php
        // Recoger infodel form
        // Enviar al navegador los datos del form

        //El echo sirve para mandar iformacion al navegador

        // El  .  es lo mismo que el + para concatenar pero en php

            // Para ver la info de php: phpinfo();
            
            echo "<h2>PHP</h2>";
            $algo="DATOS DEL FORMULARIO:";
            echo $algo;
            echo '<p>'.$_GET["nombre"].'</p>';

            echo "<p>".$_GET["telefono"]."</p>";

            echo "<p>$_GET[correo]</p>";

            echo "<p>$_GET[tema]</p>";

            echo '<p>'.$_GET["informacion"].'</p>';
        ?>
    </body>
</html>


<!-- Los indices en array de form en metodo get usan inices alfanumericos, se denomina asociativos -->

