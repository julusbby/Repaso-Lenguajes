<?php
/**
 * ============================================
 * TEMA 9: FUNCIONES
 * ============================================
 *
 * Una función agrupa código reutilizable. Se define una vez
 * y se puede "llamar" (ejecutar) muchas veces.
 */

// ----- Función básica -----
function saludar() {
    echo "¡Hola! Bienvenida a PHP.\n";
}
saludar(); // llamada a la función

// ----- Función con parámetros -----
function saludarConNombre($nombre) {
    echo "¡Hola, $nombre!\n";
}
saludarConNombre("Juliana");

// ----- Función con valor de retorno -----
function sumar($a, $b) {
    return $a + $b;
}
$resultado = sumar(5, 7);
echo "5 + 7 = $resultado\n";

// ----- Parámetros con valor por defecto -----
function saludarFormal($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre.\n";
}
saludarFormal("Juliana");             // usa el valor por defecto "Hola"
saludarFormal("Juliana", "Buenos días"); // sobreescribe el valor por defecto

// ----- Argumentos nombrados (PHP 8+) -----
function crearProducto($nombre, $precio, $talla = "M") {
    echo "Producto: $nombre | Precio: $precio | Talla: $talla\n";
}
crearProducto(nombre: "Camiseta", precio: 45000, talla: "L");

// ----- Tipado de parámetros y retorno (recomendado, más seguro) -----
function multiplicar(int $a, int $b): int {
    return $a * $b;
}
echo "4 * 6 = " . multiplicar(4, 6) . "\n";

// ----- Número variable de argumentos (...) -----
function sumarTodos(...$numeros) {
    return array_sum($numeros);
}
echo "Suma total: " . sumarTodos(1, 2, 3, 4, 5) . "\n";

// ----- Funciones anónimas (closures) -----
$cuadrado = function ($n) {
    return $n * $n;
};
echo "Cuadrado de 5: " . $cuadrado(5) . "\n";

// ----- Arrow functions (PHP 7.4+, sintaxis corta) -----
// Capturan automáticamente las variables del entorno (no necesitan "use")
$factor = 3;
$multiplicarPorFactor = fn($n) => $n * $factor;
echo "6 * factor(3) = " . $multiplicarPorFactor(6) . "\n";

// ----- Closures con "use" (forma clásica) -----
function crearContador() {
    $contador = 0;
    return function () use (&$contador) { // &$contador: por referencia
        $contador++;
        return $contador;
    };
}
$contar = crearContador();
echo $contar() . "\n"; // 1
echo $contar() . "\n"; // 2
echo $contar() . "\n"; // 3


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea una función esPar(int $numero): bool que retorne true si el
// número es par y false si es impar.

// Ejercicio 2:
// Crea una función calcularPromedio(...$notas) que reciba una cantidad
// variable de notas y retorne el promedio.

// Ejercicio 3:
// Crea una arrow function que reciba un precio y retorne el precio
// con IVA del 19% aplicado.
