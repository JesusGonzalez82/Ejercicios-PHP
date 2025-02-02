<?php  

function numAleatorio($inicio, $fin){
    if (!is_numeric($inicio) || !is_numeric($fin)){
        echo "Los datos introducidos deben ser números<br>";
        return 0;
    }else {
        return rand($inicio, $fin);
    }
}

function calculaFactorial($num){
    if (!is_numeric($num)){
        echo "Los datos introducidos deben ser números<br>";
        return 0;
    }else {
        $resultado = $num;
        for ($i=$num-1; $i > 1; $i--) { 
            $resultado *= $i;
        }
        return $resultado;
    }
}

function generarLetraAleatoria(){
    $letra = numAleatorio(1,2);
    if ($letra === 1){
        // generamos minuscula
        return chr(numAleatorio(97,122));
    }else {
        return chr(numAleatorio(65,90));
    }
}

function crearOpciones($opciones){
    if (!is_array($opciones)){
        echo "El parámetro no es un array";
    }elseif (count($opciones) == 0 || !is_array($opciones[0]) || count($opciones[0]) != 2) {
        echo "El array debe tener filas de 2 columnas.";
    }else {
        echo '<select>';
        for ($i=0; $i <count($opciones); $i++) { 
            echo '<option value="'.$opciones[$i][0].'">'.$opciones[$i][1].'</option>';
        }
        echo '</select>';
    }
}