<?php
class Cuadrado {
    private $lado;

    public function __construct($ladoInicial = 1) {
        $this->lado = $ladoInicial;
    }

    public function setLado($valorLado) {
        $this->lado = $valorLado;
    }

    public function getLado() {
        return $this->lado;
    }

    public function getArea() {
        return  pow($this->lado, 2);
    }

    public function getPerimetro() {
        return $this->lado * 4;
    }

    public function ficha(){
        return array("radio"=>$this->getLado(),"area"=>$this->getArea(),"perimetro"=>$this->getPerimetro());;
    }
}