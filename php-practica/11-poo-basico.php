<?php
/**
 * ============================================
 * TEMA 11: PROGRAMACIÓN ORIENTADA A OBJETOS (POO) - BÁSICO
 * ============================================
 *
 * Una CLASE es un molde/plano. Un OBJETO es una instancia creada
 * a partir de ese molde.
 */

// ----- Definir una clase -----
class Estudiante {
    // Propiedades (atributos / variables de la clase)
    public string $nombre;
    public int $edad;
    public string $carrera;

    // Constructor: se ejecuta automáticamente al crear el objeto
    public function __construct(string $nombre, int $edad, string $carrera) {
        $this->nombre = $nombre;   // $this hace referencia al objeto actual
        $this->edad = $edad;
        $this->carrera = $carrera;
    }

    // Método (función dentro de una clase)
    public function presentarse(): string {
        return "Hola, soy {$this->nombre}, tengo {$this->edad} años y estudio {$this->carrera}.";
    }

    public function cumplirAnios(): void {
        $this->edad++;
    }
}

// ----- Crear objetos (instancias) -----
$estudiante1 = new Estudiante("Juliana", 20, "Programación de Software");
$estudiante2 = new Estudiante("Carlos", 22, "Diseño Gráfico");

echo $estudiante1->presentarse() . "\n";
echo $estudiante2->presentarse() . "\n";

$estudiante1->cumplirAnios();
echo "Después de cumplir años: {$estudiante1->edad}\n";

echo "\n";

// ----- Visibilidad: public, private, protected -----
class CuentaBancaria {
    public string $titular;
    private float $saldo; // solo accesible dentro de la misma clase

    public function __construct(string $titular, float $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $monto): void {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }

    public function retirar(float $monto): bool {
        if ($monto > $this->saldo) {
            echo "Fondos insuficientes.\n";
            return false;
        }
        $this->saldo -= $monto;
        return true;
    }

    // Como $saldo es private, se necesita un método público para consultarlo
    public function consultarSaldo(): float {
        return $this->saldo;
    }
}

$cuenta = new CuentaBancaria("Juliana", 100000);
$cuenta->depositar(50000);
$cuenta->retirar(30000);
echo "Saldo actual: " . $cuenta->consultarSaldo() . "\n";
// echo $cuenta->saldo; // ❌ Error: no se puede acceder, es private

echo "\n";

// ----- Propiedades y métodos estáticos -----
// Pertenecen a la CLASE, no a un objeto en particular
class Contador {
    public static int $total = 0;

    public static function incrementar(): void {
        self::$total++; // self:: se usa para referirse a miembros estáticos
    }
}

Contador::incrementar();
Contador::incrementar();
Contador::incrementar();
echo "Total de instancias contadas: " . Contador::$total . "\n";


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea una clase Producto con propiedades nombre, precio y talla,
// un constructor, y un método mostrarInfo() que retorne una cadena
// describiendo el producto.

// Ejercicio 2:
// Crea una clase Libro con una propiedad private $paginasLeidas y
// métodos leerPaginas(int $cantidad) y consultarProgreso(): float
// (retorna el % leído, necesitas también $totalPaginas).

// Ejercicio 3:
// Crea 3 objetos de tu clase Producto del ejercicio 1 y recórrelos
// en un array llamando a mostrarInfo() de cada uno con foreach.
