<?php
class Circulo {
    private $radio;

    public function __construct($radioInicial = 1) {
        $this->radio = $radioInicial;
    }

    public function setRadio($valorRadio) {
        $this->radio = $valorRadio;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getArea() {
        return pi() * pow($this->radio, 2);
    }

    public function getPerimetro() {
        return 2 * pi() * $this->radio;
    }

    public function ficha(){
        return array("radio"=>$this->getRadio(),"area"=>$this->getArea(),"perimetro"=>$this->getPerimetro());;
    }
}


