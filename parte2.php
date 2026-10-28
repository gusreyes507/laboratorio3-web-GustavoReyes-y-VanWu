<?php

// Clase para trabajar con un cilindro
class Cilindro {
    private $radio;
    private $altura;

    // Constructor para asignar el radio y la altura
    public function __construct($radio, $altura) {
        $this->radio = $radio;
        $this->altura = $altura;
    }

    // Calcular el area lateral
    public function calcularAreaLateral() {
        return 2 * pi() * $this->radio * $this->altura;
    }

    // Calcular el area total
    public function calcularAreaTotal() {
        return 2 * pi() * $this->radio * ($this->radio + $this->altura);
    }

    // Calcular el volumen
    public function calcularVolumen() {
        return pi() * $this->radio * $this->radio * $this->altura;
    }
}

// Leer los datos del cilindro
$radio = (float) readline("Ingrese el radio del cilindro: ");
$altura = (float) readline("Ingrese la altura del cilindro: ");

// Crear el objeto
$cilindro = new Cilindro($radio, $altura);

// Mostrar los resultados
echo "\n--- RESULTADOS DEL CILINDRO ---\n";
echo "Area lateral: " . $cilindro->calcularAreaLateral() . "\n";
echo "Area total: " . $cilindro->calcularAreaTotal() . "\n";
echo "Volumen: " . $cilindro->calcularVolumen() . "\n";

?>