<?php
/**
 * ============================================
 * TEMA 6: BUCLES (ESTRUCTURAS REPETITIVAS)
 * ============================================
 */

// ----- for -----
// Ideal cuando ya sabes cuántas veces se debe repetir
echo "--- for ---\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteración $i\n";
}

// ----- while -----
// Se repite MIENTRAS la condición sea verdadera (se evalúa antes)
echo "\n--- while ---\n";
$contador = 1;
while ($contador <= 5) {
    echo "Contador: $contador\n";
    $contador++; // ¡ojo! si olvidas esto, el bucle es infinito
}

// ----- do-while -----
// Se ejecuta AL MENOS una vez, porque la condición se evalúa al final
echo "\n--- do-while ---\n";
$numero = 10;
do {
    echo "El número es: $numero\n";
    $numero++;
} while ($numero < 10); // aunque la condición ya es falsa, se ejecutó 1 vez

// ----- foreach -----
// La forma más común de recorrer arrays
echo "\n--- foreach (array simple) ---\n";
$frutas = ["manzana", "pera", "uva"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta\n";
}

echo "\n--- foreach con índice ---\n";
foreach ($frutas as $indice => $fruta) {
    echo "[$indice] => $fruta\n";
}

echo "\n--- foreach en array asociativo ---\n";
$persona = ["nombre" => "Juliana", "edad" => 20, "carrera" => "Programación"];
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor\n";
}

// ----- break y continue -----
echo "\n--- break ---\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // corta el bucle por completo
    }
    echo "i = $i\n";
}

echo "\n--- continue ---\n";
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 == 0) {
        continue; // salta esta iteración, sigue con la siguiente
    }
    echo "Número impar: $i\n";
}


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Usa un for para imprimir la tabla de multiplicar del 7 (del 1 al 10).

// Ejercicio 2:
// Usa un while para sumar los números del 1 al 100 y muestra el total.

// Ejercicio 3:
// Dado el array $numeros = [4, 8, 15, 16, 23, 42], usa foreach para
// imprimir solo los números pares (usa continue para saltar los impares).
