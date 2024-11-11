<?php
$dni = $_POST['dni'];
function calculaLetraNIF($dni){
    $mensaje_error = 'El DNI/NIF introducido no es correcto. Asegúrate de que continene 8 dígitos.';
    if (ctype_digit($dni) && strlen($dni) == 8){
        $resto_letras = [0 => 'T', 1 => 'R', 2 => 'W', 3 => 'A', 4 => 'G', 5 => 'M', 6 => 'Y', 7 => 'F',
            8 => 'P', 9 => 'D', 10 => 'X', 11 => 'B', 12 => 'N', 13 => 'J', 14 => 'Z',
            15 => 'S', 16 => 'Q', 17 => 'V', 18 => 'H', 19 => 'L', 20 => 'C', 21 => 'K',
            22 => 'E'];
        $mensaje_error = $resto_letras[$dni%23];
    }
    return $mensaje_error;
}
function verificadorNIF($dni){
    $validar = false;
    if (ctype_alnum($dni) && strlen((string)$dni) == 9){
        $letra = substr($dni,-1);
        if ($letra == calculaLetraNIF((int)substr($dni,0,8))){
            $validar = true;
        }
    }
    return $validar;
}

#Programa (Dependiendo del número de cifras introudcidas, utiliza una función u otra)
if (!empty($dni)) {
    if (ctype_digit($dni) && strlen($dni) == 8) { #Si solo se introducen 8 cifras se considera que se está buscando averiguar la letra del NIF
    	$letra = calculaLetraNIF($dni);
        if(strlen($letra)==1){
        	echo 'La letra correspondiente al NIF '.$dni.' es: '. $letra;
        }
        else {
		    echo $letra;
        }
    } 
    elseif (strlen($dni) == 9 && ctype_alnum($dni)) { #Si se introducen 9 caracteres, se busca validar el NIF
        if (verificadorNIF($dni)) {
            echo 'El NIF es válido.';
        } 
        else {
            echo 'Error: el NIF no es válido. Verifica que la letra final sea correcta y que el número tenga 8 dígitos.';
        }
    } 
    else {
        echo 'Error: el formato introducido no es correcto. Introduce un número de 8 dígitos para calcular la letra o un NIF completo de 9 caracteres (8 dígitos y una letra).';
    }
}
if (empty($dni)){ #Por si no se introduce el DNI
    echo 'DNI no introducido';
}
