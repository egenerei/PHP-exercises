<?php
class Departamento{
    private $nombre;

    private $empleados = [];
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function contratarEmpleado(Empleado $empleado){
        $this->empleados []= $empleado;
    }

    public function obtenerListaEmpleados(){
        return $this->empleados;
    }

    public function calcularCosteTotalSalarios(){
        $costetotal = 0;
        foreach ($this->empleados as $empleado){
            $costetotal += $empleado->getSalario();
        }
        return $costetotal;
    }
}