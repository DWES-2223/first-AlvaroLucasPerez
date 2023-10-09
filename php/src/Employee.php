<?php 

class Employee extends Worker {
    private float $sueldoPorHora;
    private float $horasTrabajadas;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25,
        float $sueldoPorHora = 10.0,
        float $horasTrabajadas = 40.0
    ) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldoPorHora = $sueldoPorHora;
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSueldo(): float {
        return $this->sueldoPorHora * $this->horasTrabajadas;
    }

    public function toHtml(): string {
        $telefonos = $this->listarTelefonos();
        return "<p>Nombre completo: {$this->nombre} {$this->apellidos}</p>
                <p>Edad: {$this->edad}</p>
                <p>Teléfonos: {$telefonos}</p>
                <p>Sueldo: {$this->calcularSueldo()}</p>";
    }
}

?>