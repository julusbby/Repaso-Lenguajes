<?php
/**
 * ============================================
 * TEMA 5: ESTRUCTURAS CONDICIONALES
 * ============================================
 */

// ----- if / else -----
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}

// ----- if / elseif / else -----
$nota = 3.8;

if ($nota >= 4.5) {
    echo "Excelente\n";
} elseif ($nota >= 3.5) {
    echo "Aprobado\n";
} elseif ($nota >= 3.0) {
    echo "Necesita mejorar\n";
} else {
    echo "Reprobado\n";
}

// ----- Condiciones anidadas -----
$esEstudiante = true;
$tieneDescuento = true;

if ($esEstudiante) {
    if ($tieneDescuento) {
        echo "Aplica doble descuento por ser estudiante.\n";
    } else {
        echo "Aplica descuento de estudiante.\n";
    }
}

// ----- Operador ternario (recordatorio) -----
$stock = 0;
echo ($stock > 0 ? "Disponible" : "Agotado") . "\n";

// ----- switch -----
// Útil cuando comparamos UNA variable contra varios valores posibles
$dia = 3;

switch ($dia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
    case 7:
        // varios case seguidos sin break comparten el mismo bloque
        echo "Fin de semana\n";
        break;
    default:
        echo "Día inválido\n";
}
// Importante: el "break" evita que el código siga cayendo a los
// siguientes "case" (esto se llama fall-through, a veces se usa a propósito).

// ----- match (PHP 8+, alternativa moderna al switch) -----
// Es más estricto (compara con ===) y siempre retorna un valor.
$resultadoMatch = match ($dia) {
    1, 2, 3, 4, 5 => "Día laboral",
    6, 7 => "Fin de semana",
    default => "Día inválido",
};
echo "match: $resultadoMatch\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea un if/elseif/else que clasifique un número $temperatura como
// "Frío" (<15), "Templado" (15-25) o "Caluroso" (>25).

// Ejercicio 2:
// Usa switch para convertir un número de mes (1-12) en su nombre
// en español (Enero, Febrero, ...).

// Ejercicio 3:
// Reescribe el ejercicio 2 usando match en vez de switch.
