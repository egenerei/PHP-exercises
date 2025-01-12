<?php
class Rectangulo {
    private $lado1;
    private $lado2;

    public function __construct($ladoInicial1 = 1,$ladoInicial2 = 1) {
        $this->lado1 = $ladoInicial1;
        $this->lado2 = $ladoInicial2;
    }

    public function setLados($valorLado1,$valorLado2) {
        $this->lado1 = $valorLado1;
        $this->lado2 = $valorLado2;
    }

    public function getLados() {
        return array("lado1"=>$this->lado1,"lado2"=>$this->lado2);
    }

    public function getArea() {
        return ($this->lado1 * $this->lado2);
    }

    public function getPerimetro() {
        return ($this->lado1 * 2) + ($this->lado2 * 2);
    }

    public function ficha(){
        return array("lados"=>$this->getLados(),"area"=>$this->getArea(),"perimetro"=>$this->getPerimetro());;
    }
}