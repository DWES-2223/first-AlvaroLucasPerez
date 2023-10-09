<?php

abstract class Worker extends Person {
    protected array $telefonos = [];

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25
    ) {
        parent::__construct($nombre, $apellidos, $edad);
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

    public abstract function calcularSueldo(): float;
}

?>