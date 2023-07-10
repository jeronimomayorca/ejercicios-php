<?php
function esPalindrome($texto)
{
    // Eliminar espacios y concertir en minusculas
    $cadena = str_replace(' ', '', strtolower($texto));


    // Revertir la cadena
    $revertida = strrev($cadena);

    // Verificar si la cadena original es igual a la cadena revertida
    if ($cadena === $revertida) {
        return true;
    } else {
        return false;
    }
}

$palabra = readline("Ingresa una frase para saber si es palíndroma ");
if (esPalindrome($palabra)) {
    echo "$palabra SI es un palíndromo.";
} else {
    echo "$palabra NO es un palíndromo.";
}
