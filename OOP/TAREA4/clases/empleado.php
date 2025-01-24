<?php
class Empleado {
    private $id;

    private $nombre;
    private $salario;
    public function __construct($id,$nombre,$salario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->salario = $salario;
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function aumentarSalario($porcentaje){
        if (0 < $porcentaje && $porcentaje <= 100){
            $this->salario += $this->salario * $porcentaje / 100;
        }
        else{
            return "Porcentaje erróneo";
        }
    }
    
}