<?php
/**
 * ============================================
 * TEMA 4: OPERADORES
 * ============================================
 */

// ----- Operadores aritméticos -----
$a = 10;
$b = 3;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";
echo "Módulo (residuo): " . ($a % $b) . "\n";
echo "Potencia: " . ($a ** 2) . "\n";

echo "\n";

// ----- Operadores de asignación -----
$contador = 5;
$contador += 3; // equivale a $contador = $contador + 3
echo "Después de += 3: $contador\n";
$contador -= 2;
echo "Después de -= 2: $contador\n";
$contador *= 2;
echo "Después de *= 2: $contador\n";
$contador /= 4;
echo "Después de /= 4: $contador\n";

echo "\n";

// ----- Incremento / decremento -----
$x = 5;
echo "x++ (post-incremento): " . $x++ . " (después vale $x)\n";
$y = 5;
echo "++y (pre-incremento): " . ++$y . "\n";

echo "\n";

// ----- Operadores de comparación -----
var_dump(5 == "5");   // true  (igual en valor)
var_dump(5 === "5");  // false (igual en valor Y tipo)
var_dump(5 != 3);     // true
var_dump(5 !== "5");  // true
var_dump(5 > 3);
var_dump(5 <= 5);

echo "\n";

// ----- Operadores lógicos -----
$tieneCarnet = true;
$tieneCasco = false;

var_dump($tieneCarnet && $tieneCasco); // Y lógico -> false
var_dump($tieneCarnet || $tieneCasco); // O lógico  -> true
var_dump(!$tieneCasco);                // negación  -> true

// También existen las palabras "and", "or" (menor precedencia, poco usadas)

echo "\n";

// ----- Operador ternario -----
$edad = 17;
$mensaje = ($edad >= 18) ? "Es mayor de edad" : "Es menor de edad";
echo "$mensaje\n";

// ----- Operador de fusión con null (null coalescing) -----
$usuario = null;
$nombreMostrar = $usuario ?? "Invitado"; // si $usuario es null, usa "Invitado"
echo "Bienvenido: $nombreMostrar\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Dadas $precio = 45000 y $cantidad = 3, calcula el total con *
// y muestra si el total supera los 100000 usando un operador de comparación.

// Ejercicio 2:
// Usa el operador módulo (%) para determinar si un número es par o impar,
// combinándolo con el operador ternario.
// $numero = 7;
// $resultado = ($numero % 2 == 0) ? "Par" : "Impar";

// Ejercicio 3:
// Usa el operador ?? para dar un valor por defecto "Sin definir"
// a una variable $ciudad que no ha sido inicializada.
