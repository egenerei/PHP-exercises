<?php
class circulo{
    public $radio;
    function __construct($radio){
        $this->radio = $radio;
        }
    function getRadio(){
        return $this-> radio;
        }
    function getArea(){
        return $this-> area = (pi()*($this->radio)*($this->radio));
        }
    function getPerimetro(){
        return $this-> perimetro = (2*pi()*($this->radio));
        }
    function getAreaR($precision){
        return number_format(pi() * pow($this->radio, 2), $precision, '.', '');
        }
    function getPerimetroR($precision){
        return number_format(pi() * pow($this->radio, 2), $precision, '.', '');
        }
    function esCirculo(){
        $circulo = false;
        if ($this->radio > 0){
            $circulo = true;
        }
        return $circulo;
    }
    
}