<?php
class Vehiculo{
    public $matricula;
    public $anomatriculacion;
    public $combustible;

    public function __construct($matricula,$anomatriculacion,$combustible){
        if (empty($matricula)){
            $this->matricula = "S/DATOS";
        }
        else{
            $this->matricula = $matricula;
        }
        if ($anomatriculacion >= 1950 && $anomatriculacion <= 2024){
            $this->anomatriculacion = $anomatriculacion;
        }
        else{
            $this->anomatriculacion = 2024;
        }
        if ($combustible === "D" || $combustible === "E" || $combustible === "L"){
            $this->combustible = $combustible;
        }
        else {
            $this->combustible = "G";
        }
    }

    public function edadVehiculo(){
        return (2024 - $this->anomatriculacion);
    }
    public function combustibleTexto(){
        $traduccion = array ("D"=>"Diesel", "G"=>"Gasolina", "E"=>"Eléctrico", "L"=>"GAS LP");
        $palabra = "";
        switch ($this->combustible) {
            case "D":
                $palabra=$traduccion['D'];
                break;
            case "G":
                $palabra=$traduccion['G'];
                break;
            case "E":
                $palabra=$traduccion['E'];
                break;
            case "L":
                $palabra=$traduccion["L"];
                break;
        }
        return $palabra;
    }
    public function ficha(){
        return "DATOS DEL VEHICULO <br>Matrícula: ".$this->matricula."<br>Año de matriculación: ".$this->anomatriculacion." (antiguedad: ".$this->edadVehiculo().")<br>COMBUSTIBLE: ".$this->combustibleTexto();
    }

}
#TEST
// $coche1 = new Vehiculo("",1934,"b");
// echo $coche1->ficha();

