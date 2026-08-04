<?php
/**
 * ============================================
 * TEMA 10: FUNCIONES DE CADENAS (STRINGS)
 * ============================================
 */

$texto = "Programación de Software";

// ----- Longitud -----
echo "Longitud: " . strlen($texto) . "\n";

// ----- Mayúsculas / minúsculas -----
echo strtoupper($texto) . "\n";       // todo en mayúsculas
echo strtolower($texto) . "\n";       // todo en minúsculas
echo ucfirst("hola mundo") . "\n";    // primera letra en mayúscula
echo ucwords("hola mundo bonito") . "\n"; // primera letra de cada palabra

// ----- Recortar espacios -----
$conEspacios = "   hola   ";
echo "[" . trim($conEspacios) . "]\n";  // quita espacios de ambos lados
echo "[" . ltrim($conEspacios) . "]\n"; // solo izquierda
echo "[" . rtrim($conEspacios) . "]\n"; // solo derecha

// ----- Buscar dentro de una cadena -----
$frase = "Me encanta programar en PHP";
var_dump(str_contains($frase, "PHP"));      // true (PHP 8+)
echo strpos($frase, "programar") . "\n";    // posición donde empieza (índice)

// ----- Reemplazar texto -----
$nuevo = str_replace("PHP", "JavaScript", $frase);
echo "$nuevo\n";

// ----- Cortar (substring) -----
echo substr($frase, 0, 10) . "\n"; // desde posición 0, 10 caracteres

// ----- Dividir y unir -----
$palabras = explode(" ", $frase); // string -> array
echo "Cantidad de palabras: " . count($palabras) . "\n";
$unido = implode("-", $palabras); // array -> string
echo "$unido\n";

// ----- Repetir -----
echo str_repeat("=", 20) . "\n";

// ----- Comparar cadenas -----
var_dump("hola" === "hola"); // true
var_dump(strcasecmp("Hola", "hola") === 0); // true, compara sin importar mayúsc/minúsc

// ----- Formatear números como texto -----
$precio = 1500000;
echo "Precio: $" . number_format($precio, 0, ',', '.') . "\n"; // 1.500.000

// ----- sprintf: crear cadenas con formato -----
$nombre = "Juliana";
$edad = 20;
$frase2 = sprintf("%s tiene %d años.", $nombre, $edad);
echo "$frase2\n";

// ----- Cadenas multilínea (heredoc) -----
$mensaje = <<<EOT
Hola $nombre,
Bienvenida al curso de PHP.
Esperamos que lo disfrutes.
EOT;
echo $mensaje . "\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Dada la variable $email = "  Juliana.Petro@Correo.com  ", limpia los
// espacios con trim() y conviértela a minúsculas con strtolower().

// Ejercicio 2:
// Dada $frase = "El patrón de la blusa tiene pinzas", usa explode() para
// separarla en palabras y cuenta cuántas hay con count().

// Ejercicio 3:
// Usa sprintf() para construir la frase:
// "El producto Camiseta cuesta $45.000 y tiene talla M"
// a partir de variables $nombreProd, $precioProd y $tallaProd.
