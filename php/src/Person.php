<?php

abstract class Person {
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(
        string $nombre,
        string $apellidos,
        int $edad = 25
    ) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public abstract function toHtml(): string;
}

?>
