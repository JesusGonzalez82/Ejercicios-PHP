<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esjercicio 7</title>
</head>
<body>
    <!-- Vamos a hacer la Tabla de Multiplicar -->
     <?php
     // Cabecera de la tabla
    echo '<table border=1>';
    echo '<tr>';
    echo '<td>X</td>';
    for ($i=1; $i <= 10; $i++) { 
        echo '<td>';
        echo $i;
        echo '</td>';
    }
    echo '<tr>';

    // Contenido

    // Columna vertical
    for ($i=1; $i <=10 ; $i++) { 
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
    // Calculos Tabla 
        for ($j=1; $j <=10 ; $j++) { 
            echo '<td>';
            echo $i * $j;
            echo '</td>';
        }

        echo '</tr>';
    }


    echo '</table>';
     ?>
</body>
</html>