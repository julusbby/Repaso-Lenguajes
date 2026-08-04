<?php
/**
 * ============================================
 * TEMA 12: POO - HERENCIA E INTERFACES
 * ============================================
 *
 * La herencia permite que una clase "hija" reutilice y extienda
 * el comportamiento de una clase "padre".
 */

// ----- Clase padre -----
class Prenda {
    public string $nombre;
    protected float $precio; // protected: visible en esta clase y en sus hijas

    public function __construct(string $nombre, float $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function descripcion(): string {
        return "Prenda: {$this->nombre} - Precio: {$this->precio}";
    }
}

// ----- Clase hija (extends) -----
class Blusa extends Prenda {
    public string $tipoManga;

    public function __construct(string $nombre, float $precio, string $tipoManga) {
        parent::__construct($nombre, $precio); // llama al constructor del padre
        $this->tipoManga = $tipoManga;
    }

    // Sobreescribir (override) un método del padre
    public function descripcion(): string {
        $descripcionPadre = parent::descripcion(); // reutiliza lógica del padre
        return "$descripcionPadre - Manga: {$this->tipoManga}";
    }
}

$blusa = new Blusa("Blusa con pinza", 65000, "Manga japonesa");
echo $blusa->descripcion() . "\n";

echo "\n";

// ----- Clases abstractas -----
// No se pueden instanciar directamente, solo sirven como "plantilla"
// para que otras clases las extiendan y completen los métodos abstractos.
abstract class Figura {
    abstract public function calcularArea(): float;

    public function describir(): string {
        return "Esta figura tiene un área de " . $this->calcularArea();
    }
}

class Rectangulo extends Figura {
    public function __construct(private float $base, private float $altura) {}

    public function calcularArea(): float {
        return $this->base * $this->altura;
    }
}

class Circulo extends Figura {
    public function __construct(private float $radio) {}

    public function calcularArea(): float {
        return pi() * ($this->radio ** 2);
    }
}

$figuras = [new Rectangulo(4, 5), new Circulo(3)];
foreach ($figuras as $figura) {
    echo $figura->describir() . "\n";
}

echo "\n";

// ----- Interfaces -----
// Definen un "contrato": qué métodos debe tener una clase, sin decir cómo.
// Una clase puede implementar varias interfaces (a diferencia de la herencia simple).
interface Vendible {
    public function precioConDescuento(float $porcentaje): float;
}

class Camiseta extends Prenda implements Vendible {
    public function precioConDescuento(float $porcentaje): float {
        return $this->precio - ($this->precio * $porcentaje / 100);
    }
}

$camiseta = new Camiseta("Camiseta básica", 45000);
echo "Precio con 20% de descuento: " . $camiseta->precioConDescuento(20) . "\n";

// ----- instanceof: verificar el tipo de un objeto -----
var_dump($camiseta instanceof Prenda);     // true (herencia)
var_dump($camiseta instanceof Vendible);   // true (interfaz)
var_dump($blusa instanceof Vendible);      // false


/**
 * ============================================
 * SECCIÓN DE EJERCICIOS
 * ============================================
 */

// Ejercicio 1:
// Crea una clase Pantalon que extienda de Prenda y agregue una
// propiedad $talla. Sobreescribe descripcion() para incluir la talla.

// Ejercicio 2:
// Crea una clase abstracta Empleado con un método abstracto
// calcularSalario(): float. Luego crea dos clases hijas
// EmpleadoFijo y EmpleadoPorHoras que implementen ese método
// de forma distinta.

// Ejercicio 3:
// Crea una interfaz Lavable con un método instruccionesLavado(): string
// e impleméntala en la clase Blusa.
