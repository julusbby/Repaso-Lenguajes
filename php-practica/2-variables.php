<?php
/**
 * ============================================
 * TEMA 2: VARIABLES
 * ============================================
 *
 * - Toda variable en PHP empieza con el símbolo $
 * - No se declara el tipo (PHP es de tipado dinámico)
 * - Nombres: letras, números y guion bajo. NO pueden empezar con número.
 * - Son sensibles a mayúsculas/minúsculas: $nombre != $Nombre
 */

// ----- Declaración y asignación -----
$nombre = "Juliana";
$edad = 20;
$promedio = 4.5;
$esEstudiante = true;

echo "Nombre: $nombre\n";
echo "Edad: $edad\n";
echo "Promedio: $promedio\n";

// ----- Concatenación con el operador punto (.) -----
echo "Hola, " . $nombre . ". Tienes " . $edad . " años.\n";

// ----- Interpolación (más cómoda, solo con comillas dobles) -----
echo "Hola, $nombre. Tienes $edad años.\n";

// Para incrustar expresiones más complejas se usan llaves {}
$materia = "Programación";
echo "Estás cursando {$materia}.\n";

// ----- Reasignar variables -----
$edad = $edad + 1; // ahora $edad vale 21
echo "El próximo año tendrás: $edad\n";

// ----- Variables variables (curiosidad, poco uso común) -----
$saludo = "hola";
$$saludo = "¡Buenas!"; // crea una variable llamada $hola
echo $hola . "\n";

// ----- Constantes -----
// Una constante no cambia de valor una vez definida. No lleva $.
define("PI", 3.1416);
const IVA = 0.19; // otra forma de definir constantes
echo "PI vale: " . PI . "\n";
echo "IVA vale: " . IVA . "\n";

// ----- Ámbito de las variables (scope) -----
// Una variable definida fuera de una función NO es visible dentro de ella
$global = "soy global";

function mostrarVariable() {
    // echo $global; // ❌ Error / no definida: fuera de alcance
    global $global; // así se puede acceder a la variable global
    echo "Dentro de la función: $global\n";
}
mostrarVariable();


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea 3 variables: $ciudad, $pais y $anio. Imprímelas en una sola
// frase usando interpolación.

// Ejercicio 2:
// Crea una variable $precio = 15000 y otra $descuento = 2000.
// Calcula e imprime $precioFinal = $precio - $descuento.

// Ejercicio 3:
// Define una constante llamada VERSION con el valor "1.0" e imprímela.
