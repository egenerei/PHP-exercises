<?php

class Tomador {
    private $nombre;
    private $anocarnet;
    private $sexo;

    public function __construct($nombre , $anocarnet, $sexo){
        $this->setNombre($nombre);
        $this->setAnoCarnet($anocarnet);
        $this->setSexo($sexo);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAnoCarnet(){
        return $this->anocarnet;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setNombre($nombre){
        if ($nombre == "" || is_numeric($nombre)){
            $this->nombre = "cliente generico";
        }
        else{
            $this->nombre = $nombre;
        }
    }
    public function setAnoCarnet ($anocarnet){
        if ($anocarnet >= 1950 && $anocarnet <= 2024){
            $this->anocarnet = $anocarnet;
        }
        else{
            $this->anocarnet = 2024;
        }
    }
    public function setSexo($sexo){
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
$tomador = new Tomador("jose","1944","D");
echo $tomador->ficha();
