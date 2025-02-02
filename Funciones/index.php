<?php

require "funciones.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    <p>El numero aleatorio elegido entre 5 y 100 es: <?php echo numAleatorio(5, 100)?> </p>
    <p>El factorial del número introducido es : <?php echo calculaFactorial(25) ?></p>
    <p>Genearamos una letra aleatoria <?php echo generarLetraAleatoria() ?></p>

    <?php
        $array = [
            [1, "España"],
            [2, "Alemania"],
            [3, "Francia"],
            [4, "Inglaterra"],
            [5, "Italia"]
        ];

        crearOpciones($array);
    ?>
</body>
</html>