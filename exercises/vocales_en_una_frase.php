<?php
/*
Desarrolla un script que devuelva el numero de veces que aparece cada vocal en una frase
*/


// Ingresa la frase
$frase = readline("Ingresa la frase para contar las vocales que hay en ella ");

// Convertir la frase a minúsculas
$frase = strtolower($frase);

// Inicializar el contador para cada vocal
$vocales = array(
    'a' => 0,
    'e' => 0,
    'i' => 0,
    'o' => 0,
    'u' => 0
);

// Recorrer la frase y contar las vocales
for ($i = 0; $i < strlen($frase); $i++) {
    $caracter = $frase[$i];

    if (in_array($caracter, array_keys($vocales))) {
        $vocales[$caracter]++;
    }
}

// Imprimir el resultado
foreach ($vocales as $vocal => $contador) {
    echo "La vocal '$vocal' aparece $contador veces." . PHP_EOL;
}
