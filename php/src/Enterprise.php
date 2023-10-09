<?php 

class Enterprise {
    private string $nombre;
    private string $direccion;
    private array $workers = [];

    public function __construct(string $nombre, string $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function addWorker(Worker $worker): void {
        $this->workers[] = $worker;
    }

    public function listWorkersHtml(): string {
        $html = "<h2>Trabajadores de {$this->nombre}</h2>";
        foreach ($this->workers as $worker) {
            $html .= $worker->toHtml();
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $costeTotal = 0.0;
        foreach ($this->workers as $worker) {
            $costeTotal += $worker->calcularSueldo();
        }
        return $costeTotal;
    }
}

?>
