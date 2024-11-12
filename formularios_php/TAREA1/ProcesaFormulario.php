<?php
#Documentos requeridos
require 'FuncionesNIF.php';
#Variables necesarias
$dni = $_POST['dni'];


#debug 
# echo $dni;
# echo calculaLetraNIF($dni);
# echo var_dump(verificadorNIF($dni));

#Programa (Dependiendo del número de cifras introudcidas, utiliza una función u otra)
if (!empty($dni)) {
    if (strlen($dni) == 8) { #Si solo se introducen 8 cifras se considera que se está buscando averiguar la letra del NIF
    	$mensaje = calculaLetraNIF($dni);
        if(strlen($letra)==1){
        	echo 'La letra correspondiente al NIF '.$dni.' es: '. $letra;
        }
        else {
		    echo $mensaje;
        }
    } 
    elseif (strlen($dni) == 9) { #Si se introducen 9 caracteres, se busca validar el NIF
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
