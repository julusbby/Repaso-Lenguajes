<?php
/**
 * ============================================
 * TEMA 8: ARRAYS ASOCIATIVOS Y MULTIDIMENSIONALES
 * ============================================
 *
 * Un array asociativo usa llaves (keys) con nombre en lugar de
 * números, como si fuera un diccionario "clave => valor".
 */

// ----- Crear un array asociativo -----
$estudiante = [
    "nombre"  => "Juliana",
    "edad"    => 20,
    "carrera" => "Programación de Software",
    "semestre" => 3,
];

// ----- Acceder a valores -----
echo "Nombre: " . $estudiante["nombre"] . "\n";
echo "Carrera: " . $estudiante["carrera"] . "\n";

// ----- Modificar / agregar claves -----
$estudiante["universidad"] = "UPB";
$estudiante["edad"] = 21;

// ----- Recorrer con foreach -----
echo "\n--- Datos del estudiante ---\n";
foreach ($estudiante as $clave => $valor) {
    echo ucfirst($clave) . ": $valor\n";
}

// ----- Verificar si existe una clave -----
if (array_key_exists("carrera", $estudiante)) {
    echo "\nLa clave 'carrera' existe.\n";
}
// isset() también funciona (más rápida, pero false si el valor es null)
var_dump(isset($estudiante["nombre"]));

// ----- Obtener solo las claves o solo los valores -----
$claves = array_keys($estudiante);
$valores = array_values($estudiante);
echo "\nClaves: " . implode(", ", $claves) . "\n";

// ----- Eliminar una clave -----
unset($estudiante["semestre"]);


// ============================================
// ARRAYS MULTIDIMENSIONALES
// ============================================
// Un array dentro de otro array. Muy común para representar
// listas de "objetos" tipo tabla (como filas de una base de datos).

$productos = [
    ["nombre" => "Camiseta", "precio" => 45000, "talla" => "M"],
    ["nombre" => "Pantalón", "precio" => 89000, "talla" => "L"],
    ["nombre" => "Chaqueta", "precio" => 150000, "talla" => "S"],
];

echo "\n--- Catálogo de productos ---\n";
foreach ($productos as $producto) {
    echo "{$producto['nombre']} - Talla {$producto['talla']} - $" . number_format($producto['precio'], 0, ',', '.') . "\n";
}

// Acceder a un valor específico dentro del array multidimensional
echo "\nPrecio del primer producto: " . $productos[0]["precio"] . "\n";

// Calcular el total con array_sum + array_column
$total = array_sum(array_column($productos, "precio"));
echo "Total del catálogo: $total\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea un array asociativo $libro con las claves: titulo, autor, anio.
// Imprime una frase usando sus 3 valores.

// Ejercicio 2:
// Crea un array multidimensional $usuarios con al menos 3 usuarios,
// cada uno con "nombre" y "correo". Recórrelo con foreach e imprime
// "Nombre: ___, Correo: ___" para cada uno.

// Ejercicio 3:
// Usando el array $productos del ejemplo, filtra (array_filter) los
// productos con precio mayor a 80000 y muestra solo sus nombres.
