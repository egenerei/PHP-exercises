<?php
class Equipo{
    private $nombreEquipo;
    private $jugadores = [];

    public function __construct($nombreEquipo) {
        $this->nombreEquipo = $nombreEquipo;
    }

    public function anadirFutbolista(Futbolista $futbolista) {
        $this->jugadores[] = $futbolista;
    }

    public function eliminarFutbolista($nombre) {
        foreach ($this->jugadores as $key => $jugador) {
            if ($jugador->getNombre() === $nombre) {
                unset($this->jugadores[$key]);
                $this->jugadores = array_values($this->jugadores);
                echo "Futbolista $nombre eliminado del equipo.";
                return;
            }
        }
        echo "Futbolista $nombre no encontrado en el equipo.";
    }

    public function mostrarJugadores() {
        echo "Jugadores del equipo $this->nombreEquipo:";
        foreach ($this->jugadores as $jugador) {
            $jugador->mostrarDetalles();
        }
    }
}