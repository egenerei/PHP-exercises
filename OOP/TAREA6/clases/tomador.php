<?php

class Tomador {
    public $nombre;
    public $anocarnet;
    public $sexo;

    public function __construct($nombre, $anocarnet, $sexo){
        if ($nombre == "" || is_numeric($nombre)){
            $this->nombre = "cliente generico";
        }
        else{
            $this->nombre = $nombre;
        }
        if ($anocarnet >= 1950 && $anocarnet <= 2024){
            $this->anocarnet = $anocarnet;
        }
        else{
            $this->anocarnet = 2024;
        }
        if ($sexo != 'H' && $sexo != 'F'){
            $this->sexo = 'M';
        }
        else{
            $this->sexo = $sexo;
        }
    }
    public function edadCarnet(){
        return (2024 - $this->anocarnet);
    }
    public function ficha(){
        return "Datos del tomador<br>Nombre: ".$this->nombre."<br>Año de obtencion del carnet: ". $this->anocarnet."<br>SEXO: ". $this->sexo;
    }
}
#TEST
// $tomador = new Tomador("","194","D");
// echo $tomador->ficha();