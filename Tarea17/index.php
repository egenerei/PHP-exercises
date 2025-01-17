<?php
    function calcular_area($base,$altura){
        return $base * $altura;
    }

    function calcular_perimetro($base,$altura){
        return ($base+$altura)*2;
    }

    function intercambio (&$base,&$altura){
        $int = $base;
        $base = $altura;
        $altura = $int;
    }

    $base = 4;
    $altura = 8;

    echo 'El Área es: ';
echo calcular_area($base,$altura);
echo '</br>El Perímetro es:';
echo calcular_perimetro($base,$altura);
echo '</br>';
intercambio ($base,$altura);
echo $base,$altura;

