<?php
#Examen Jorge Del Rey Prieto
function totalArticulos5($listaArticulos){
    $sumaPrecios=0;
    foreach ($listaArticulos as $value){
        $sumaPrecios += $value;
        }
    return $sumaPrecios;
}

function precioConDescuento($precio,$descuento){
    return $precio - ($precio * ($descuento/100));
}

function fechaEntrega($dias){ #realizada con objetos.
    $fecha = new DateTime("now"); #pido la fecha de hoy al sistema
    $strDays=$dias.' day'; #convierto los dias a str para usarlos en DateInterval
    $intervalo = DateInterval::createFromDateString($strDays); #funcion que sustituye a strtotime con objetos
    return date_add($fecha,$intervalo)->format("D, d - m - Y"); #date_add le suma al dia actual los dias que le introduzcamos a la funcion. Además le doy  formato.
}

