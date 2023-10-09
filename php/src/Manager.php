<?php
class Manager extends Worker {
    private float $salarioBase;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25,
        float $salarioBase = 3000.0
    ) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSueldo(): float {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
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