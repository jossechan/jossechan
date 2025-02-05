<?php
function validarTexto($cadena) {
    // Paso 2-Convertir a minúsculas por si fuera
    $textoOriginal= mb_strtolower($cadena, 'UTF-8');
    
    // Paso 3-Eliminar espacios y signos de puntuación de texto de entrada
    $textoOriginal = preg_replace('/[^a-z0-9]/u', '', $textoOriginal);
    
    // Paso 4-Invertir la cadena de texto
    $textoInverso = strrev($textoOriginal);
    
    //Paso  5-Comparar texto original procesada con texto invertido
    if ($textoOriginal === $textoInverso ) {
        //Paso 6-Devolver resultado de validación
        return "Es palíndromo";
    } else {
        return "No es palíndromo";
    }
}

// Paso 1-Ingresa una palabra o frase de texto
$entrada1 = "Oso";
echo validarTexto($entrada1);
$entrada2 = "Anita lava la tina";
echo validarTexto($entrada2);
?>
