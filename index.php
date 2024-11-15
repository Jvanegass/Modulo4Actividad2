<?php
// Ejercicio 1: Problema de Lista Invertida
function listaInvertida($array) {
    return array_reverse($array);
}

$numeros = [1, 2, 3, 4, 5];
$resultado = listaInvertida($numeros);
echo "Lista invertida: ";
print_r($resultado);


// Ejercicio 2: Problema de Suma de Números Pares
function sumaNumerosPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaPares = sumaNumerosPares($numeros);
echo "\nSuma de números pares: $sumaPares\n";


// Ejercicio 3: Problema de Frecuencia de Caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    $longitud = strlen($cadena);
    
    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

$cadena = "hola mundo";
$frecuencia = frecuenciaCaracteres($cadena);
echo "\nFrecuencia de caracteres:\n";
print_r($frecuencia);


// Ejercicio 4: Problema de Bucle Anidado
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        for ($j = $i; $j < $altura; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

$altura = 5;
echo "\nPirámide de asteriscos:\n";
imprimirPiramide($altura);
?>
