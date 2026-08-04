<?php
/**
 * ============================================
 * TEMA 3: TIPOS DE DATOS
 * ============================================
 *
 * Tipos escalares: int, float (double), string, bool
 * Tipos compuestos: array, object
 * Tipos especiales: null, resource
 */

// ----- int (enteros) -----
$edad = 20;
echo gettype($edad) . ": $edad\n"; // integer

// ----- float / double (decimales) -----
$altura = 1.65;
echo gettype($altura) . ": $altura\n"; // double

// ----- string (texto) -----
$nombre = "Juliana";
echo gettype($nombre) . ": $nombre\n"; // string

// ----- bool (verdadero/falso) -----
$activo = true;
echo gettype($activo) . ": " . ($activo ? "true" : "false") . "\n"; // boolean

// ----- array -----
$colores = ["rojo", "verde", "azul"];
echo gettype($colores) . ": " . implode(", ", $colores) . "\n"; // array

// ----- null -----
$sinValor = null;
echo gettype($sinValor) . "\n"; // NULL

// ----- var_dump: muestra tipo Y valor, muy útil para depurar -----
var_dump($edad);
var_dump($altura);
var_dump($nombre);
var_dump($activo);
var_dump($colores);
var_dump($sinValor);

echo "\n";

// ----- Conversión de tipos (casting) -----
$textoNumero = "25";
$numero = (int) $textoNumero; // convierte string a int
echo gettype($numero) . ": $numero\n";

$numeroFloat = (float) "3.14";
echo gettype($numeroFloat) . ": $numeroFloat\n";

$numeroComoTexto = (string) 100;
echo gettype($numeroComoTexto) . ": $numeroComoTexto\n";

// ----- Conversión automática (type juggling) -----
// PHP convierte tipos automáticamente en ciertas operaciones
$resultado = "5" + 3; // "5" se convierte a int automáticamente
echo "\"5\" + 3 = $resultado (" . gettype($resultado) . ")\n";

$resultado2 = "5" . 3; // el punto concatena, aquí 3 se convierte a string
echo "\"5\" . 3 = $resultado2 (" . gettype($resultado2) . ")\n";

// ----- Comparación de tipos: == vs === -----
var_dump(5 == "5");  // true  -> compara solo el valor
var_dump(5 === "5"); // false -> compara valor Y tipo (más seguro, recomendado)


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea una variable de cada tipo (int, float, string, bool, array, null)
// y usa var_dump() para mostrarlas todas.

// Ejercicio 2:
// Convierte la cadena "42.9" primero a int y luego a float.
// Imprime ambos resultados y observa la diferencia.

// Ejercicio 3:
// Usa var_dump() para comparar 0 == "a" y 0 === "a" en PHP 8+
// e investiga por qué el resultado puede sorprenderte.
