<?php

    session_start();

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $suma = $num1 + $num2;

    $_SESSION['resultado'] = $suma;

    header("Location: ejercicio2_POST_mejorado.php");