<?php
function calcular_edad($persona){
    $año_actual = 2024;
    $año_nac = substr($persona["fecha_nacimiento"],0,4);
    return $año_actual - (int)$año_nac;   
}

function salario_anual($persona){
    return $persona["salario_mensual"] * 12;
}

function veterano($persona){
    $año_actual = 2024;
    $año_ent = substr($persona["fecha_ingreso"],0,4);
    $veterano = false;
    if ($año_actual - $año_ent > 10){
        $veterano = true;
    }
    return $veterano;
}

function iniciales_2($persona){
    $iniciales = $persona["nombre"][0];
    for ($i = 1; $i < strlen($persona["nombre"]);$i++){
        if ($persona ["nombre"][$i-1] == " "){
            $iniciales .= $persona ["nombre"][$i];
        }
    }
    return $iniciales;
}

