<!-- 1. Teniendo dos input de type number, recogelos via post, sumalos y muestra el resultado. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    if (isset($_POST['enviar'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $suma = $num1 + $num2;
    }

    ?>

    <form method="post">
        <label for="num1">Inserta el numero 1</label>
        <input type="number" id="num1 "name="num1" required>

        <label for="num2">Inserta el numero 2</label>
        <input type="number" id="num2" name="num2">

        <input type="submit" name="enviar" value="sumar">
    </form>

    <p>
        <?php
        if (isset($_POST['enviar'])){
            echo $suma;
        }
        ?>
    </p>
</body>
</html>