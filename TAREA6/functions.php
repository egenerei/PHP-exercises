<?php
function es_par($number){
    if ($number == (int)$number){
        $type = 'par';
        if ($number % 2 != 0){
            $type = 'impar';
        }
    }
    else{
        $type = 'Valor no válido';
    }
    return $type;
}

function ordena_dos($value1,$value2){
    $ordered = $value2.' , '.$value1; 
    if ($value2 < $value1){
        $ordered = $value2.' , '.$value1;
    }
    if (is_int($value2) and !is_int($value1)){
        $ordered = $value1.' , '.$value2;
    }
    if (!is_int($value2) and is_int($value1)){
        $ordered = $value2.' , '.$value1;
    }
    if ($value1 == TRUE and $value2 == FALSE){
        $ordered = 1;
    }
    return $ordered;
}


function cuenta_letra($string,$letter){
    $i = 0;
    for ($b = 0; $b < strlen($string);$b++) {
        if ($letter == $string[$b]) {
            $i++;
        }
    }
    return $i;
}

function suma_pares($numbers){
    $suma=0;
    for ($c = 0; $c <= count($numbers); $c += 2){
        $suma += $numbers[$c];
    }
    return $suma;
}