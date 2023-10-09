<?php
class Persona {
    private string $nombre;
    private string $apellidos;
    private int $edad;
    private bool $jubilado;

    private static int $limite_edat = 66;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25
    ) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->jubilado = false;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function estaJubilado(): bool {
        return $this->edad >= self::$limite_edat;
    }

    public function jubilar(): void {
        $this->jubilado = true;
    }

    public static function modificaLimite(int $nuevoLimite): void {
        self::$limite_edat = $nuevoLimite;
    }

    public function __toString(): string {
        return "Nombre: $this->nombre, Apellidos: $this->apellidos, Edad: {$this->edad}";
    }
}

?>
