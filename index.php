<?php

// Ejercicio 1: Serie de Fibonacci
// Esta función genera los primeros 'n' términos de la serie Fibonacci.
function generarFibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return array_slice($fibonacci, 0, $n);
}

// Ejemplo de uso:
$n = 10; 
echo "Los primeros $n términos de la serie Fibonacci son: ";
print_r(generarFibonacci($n));


// Ejercicio 2: Números Primos
// Esta función verifica si un número es primo.
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Ejemplo de uso:
$numero = 29; 
echo "\nEl número $numero ". (esPrimo($numero) ? "es primo" : "no es primo") . ".\n";


// Ejercicio 3: Palíndromos
// Esta función verifica si una cadena de texto es un palíndromo.
function esPalindromo($cadena) {
    
    $cadena = strtolower(str_replace(' ', '', $cadena));
    return $cadena === strrev($cadena);
}

// Ejemplo de uso:
$cadena = "anita lava la tina"; 
echo "\nLa cadena '$cadena' ". (esPalindromo($cadena) ? "es un palíndromo" : "no es un palíndromo") . ".\n";

?>
