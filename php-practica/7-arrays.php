<?php
/**
 * ============================================
 * TEMA 7: ARRAYS (INDEXADOS)
 * ============================================
 *
 * Un array es una colección de valores. En PHP los arrays indexados
 * usan números (0, 1, 2...) como llave automáticamente.
 */

// ----- Crear un array -----
$colores = ["rojo", "verde", "azul"]; // forma moderna (recomendada)
$numeros = array(1, 2, 3, 4, 5);      // forma clásica, también válida

// ----- Acceder a elementos (el índice empieza en 0) -----
echo "Primer color: " . $colores[0] . "\n";
echo "Último color: " . $colores[2] . "\n";

// ----- Modificar un elemento -----
$colores[1] = "verde oscuro";
echo "Color modificado: " . $colores[1] . "\n";

// ----- Agregar elementos -----
$colores[] = "amarillo"; // agrega al final
array_push($colores, "morado"); // también agrega al final (puede añadir varios)
echo "Total de colores: " . count($colores) . "\n";

// ----- Recorrer un array -----
echo "\n--- Todos los colores ---\n";
foreach ($colores as $indice => $color) {
    echo "$indice: $color\n";
}

// ----- Funciones útiles con arrays -----
$numeros = [5, 3, 8, 1, 9, 2];

echo "\ncount(): " . count($numeros) . "\n";
echo "max(): " . max($numeros) . "\n";
echo "min(): " . min($numeros) . "\n";
echo "array_sum(): " . array_sum($numeros) . "\n";

sort($numeros); // ordena de menor a mayor (modifica el array original)
echo "sort(): " . implode(", ", $numeros) . "\n";

rsort($numeros); // ordena de mayor a menor
echo "rsort(): " . implode(", ", $numeros) . "\n";

// in_array: verifica si un valor existe
var_dump(in_array(8, $numeros)); // true

// array_search: retorna el índice de un valor
echo "Índice del 8: " . array_search(8, $numeros) . "\n";

// array_slice: extrae una porción del array
$porcion = array_slice($numeros, 0, 3);
echo "Primeros 3: " . implode(", ", $porcion) . "\n";

// array_map: aplica una función a cada elemento y retorna un array nuevo
$duplicados = array_map(function ($n) {
    return $n * 2;
}, $numeros);
echo "Duplicados: " . implode(", ", $duplicados) . "\n";

// array_filter: filtra elementos según una condición
$mayoresA4 = array_filter($numeros, function ($n) {
    return $n > 4;
});
echo "Mayores a 4: " . implode(", ", $mayoresA4) . "\n";

// eliminar un elemento por índice
unset($numeros[0]);
echo "Después de unset(): " . implode(", ", $numeros) . "\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea un array $tallas = ["S", "M", "L", "XL"] y agrega "XXL" al final.

// Ejercicio 2:
// Dado $precios = [15000, 8000, 22000, 5000], usa array_filter para obtener
// solo los precios mayores a 10000, y array_sum para sumar todos los precios.

// Ejercicio 3:
// Usa array_map para crear un nuevo array con los precios de $precios
// aplicando un 10% de descuento a cada uno.
