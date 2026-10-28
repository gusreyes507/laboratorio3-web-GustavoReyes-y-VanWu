<?php

class Empleado {

    // Atributos privados
    private $nombre;
    private $cedula;
    private $edad;
    private $sueldoBruto;
    private $seguroSocial;
    private $impuestoRenta;
    private $sueldoNeto;

    // Constructor
    public function __construct($nombre, $cedula, $edad, $sueldoBruto) {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->sueldoBruto = $sueldoBruto;
        $this->seguroSocial = 0;
        $this->impuestoRenta = 0;
        $this->sueldoNeto = 0;
    }

    // Calcular seguro social
    public function calcularSS() {
        $this->seguroSocial = $this->sueldoBruto * 0.125;
    }

    // Calcular impuesto sobre la renta
    public function calcularIR() {
        if ($this->sueldoBruto < 11000) {
            $this->impuestoRenta = 0;
        } elseif ($this->sueldoBruto < 50000) {
            $this->impuestoRenta = $this->sueldoBruto * 0.15;
        } else {
            $this->impuestoRenta = $this->sueldoBruto * 0.25;
        }
    }

    // Calcular y asignar el sueldo neto
    public function setSueldoNeto() {
        $this->sueldoNeto = $this->sueldoBruto - $this->seguroSocial - $this->impuestoRenta;
    }

    // Metodos get para devolver los atributos
    public function getNombre() {
        return $this->nombre;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getSueldoBruto() {
        return $this->sueldoBruto;
    }

    public function getSeguroSocial() {
        return $this->seguroSocial;
    }

    public function getImpuestoRenta() {
        return $this->impuestoRenta;
    }

    public function getSueldoNeto() {
        return $this->sueldoNeto;
    }
}

// Leer los datos del empleado
$nombre = readline("Ingrese el nombre del empleado: ");
$cedula = readline("Ingrese la cedula del empleado: ");
$edad = (int) readline("Ingrese la edad del empleado: ");
$sueldoBruto = (float) readline("Ingrese el sueldo bruto anual: ");

// Crear el objeto empleado
$empleado = new Empleado($nombre, $cedula, $edad, $sueldoBruto);

// Calcular las deducciones y el sueldo neto
$empleado->calcularSS();
$empleado->calcularIR();
$empleado->setSueldoNeto();

// Mostrar los resultados
echo "\n--- DATOS DEL EMPLEADO ---\n";
echo "Nombre: " . $empleado->getNombre() . "\n";
echo "Cedula: " . $empleado->getCedula() . "\n";
echo "Edad: " . $empleado->getEdad() . "\n";
echo "Sueldo bruto anual: $" . $empleado->getSueldoBruto() . "\n";
echo "Seguro social: $" . $empleado->getSeguroSocial() . "\n";
echo "Impuesto sobre la renta: $" . $empleado->getImpuestoRenta() . "\n";
echo "Sueldo neto anual: $" . $empleado->getSueldoNeto() . "\n";

?>