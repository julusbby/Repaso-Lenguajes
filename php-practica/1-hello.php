<?php
/**
 * ============================================
 * TEMA 1: INTRODUCCIÓN A PHP
 * ============================================
 *
 * PHP (PHP: Hypertext Preprocessor) es un lenguaje de programación
 * de propósito general, usado sobre todo para desarrollo web del lado
 * del servidor (backend).
 *
 * - Todo código PHP va dentro de las etiquetas <?php ... ?>
 * - Si el archivo es 100% PHP, se puede omitir el ?> de cierre
 *   (recomendado, evita espacios en blanco accidentales).
 * - Cada instrucción termina con punto y coma ; (¡muy importante!)
 */

// ----- Comentarios -----
// Esto es un comentario de una sola línea (con //)
# Esto también es un comentario de una sola línea (con #, menos usado)

/*
   Esto es un comentario
   de varias líneas
*/

// ----- Mostrar texto en pantalla -----
// echo y print sirven para mostrar contenido. echo es la más usada.
echo "Hola, mundo!";
echo "\n"; // salto de línea (en consola/CLI)

echo "Hola de nuevo, esta vez con print", "\n";
print "Print también funciona (solo acepta un argumento)\n";

// echo puede recibir varios valores separados por coma
echo "Puedo", " ", "unir", " ", "varias", " ", "cadenas", "\n";

// ----- Comillas simples vs dobles -----
// Comillas simples: texto literal, NO interpreta variables ni \n
echo 'Con comillas simples no se interpreta el salto \n de línea';
echo "\n";

// Comillas dobles: SÍ interpreta variables y caracteres especiales (\n, \t)
$nombre = "Juliana";
echo "Con comillas dobles sí funciona el nombre: $nombre \n";

// ----- Ejecutar este archivo -----
// Desde la terminal (con PHP instalado):
//   php 1-hello.php
// En VS Code, se recomienda la extensión "PHP Debug" o "Code Runner".


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 * Descomenta y completa cada ejercicio debajo de su enunciado.
 */

// Ejercicio 1:
// Imprime tu nombre completo usando echo.
// echo "Mi nombre es ...";

// Ejercicio 2:
// Imprime un pequeño "arte" con varias líneas usando \n dentro
// de una sola cadena con comillas dobles.
// echo "*****\n*   *\n*****\n";

// Ejercicio 3:
// Usa comillas simples para imprimir literalmente el texto: Precio: $50 (con \n incluido)
// (recuerda: con comillas simples $ y \n no se interpretan)
