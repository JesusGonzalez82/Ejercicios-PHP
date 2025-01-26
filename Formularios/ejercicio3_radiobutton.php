<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>  
    <form action="datos_radioButton.php" method="post">
        <input type="radio" name="figura" value="circulo" checked>Circulo</br>
        <input type="radio" name="figura" value="cuadrado">Cuadrado</br>
        <input type="radio" name="figura" value="triangulo">Triangulo</br>
        <br>
        <label for="radio">Radio</label>
        <input type="number" name="radio" id="radio">

        <label for="radio">Lado</label>
        <input type="number" name="lado" id="lado">

        <label for="radio">Base</label>
        <input type="number" name="base" id="base">

        <label for="radio">Altura</label>
        <input type="number" name="altura" id="altura">

        <input type="submit">
        
    </form>
    <?php
    session_start();
    if(isset($_SESSION['resultado'])){
        echo "El resultado es: " . $_SESSION['resultado'];
        unset($_SESSION['$resultado']);
    }
    ?>
</body>
</html>