<?php
class Futbolista {
    private $nombre;
    private $edad;
    private $posicion;

    public function __construct($nombre, $edad, $posicion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->posicion = $posicion;
    }

    public function mostrarDetalles() {
        echo "Nombre: $this->nombre, Edad: $this->edad, Posición: $this->posicion";
    }

    public function getNombre() {
        return $this->nombre;
    }
}
