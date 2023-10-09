<?php

class Empleado extends Persona {
    private float $sou;
    private array $telefonos = [];

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25,
        float $sou = 0.0
    ) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sou = $sou;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->sou > 3333.0;
    }

    public function getSou(): float {
        return $this->sou;
    }

    public function setSou(float $sou): void {
        $this->sou = $sou;
    }

    public static function toHtml(Empleado $emp): string {
        $nombreCompleto = $emp->getNombreCompleto();
        $telefonos = explode(', ', $emp->listarTelefonos());
        
        $html = "<p>Nombre completo: $nombreCompleto</p>";
        $html .= "<p>Teléfonos:</p>";
        $html .= "<ul>";
        foreach ($telefonos as $telefono) {
            $html .= "<li>$telefono</li>";
        }
        $html .= "</ul>";
    
        return $html;
    }

    public function __toString(): string {
        $infoEmpleado = parent::__toString(); 
        return "$infoEmpleado, Salario: {$this->getSou()}, Teléfonos: {$this->listarTelefonos()}";
    }

    
}

?>
