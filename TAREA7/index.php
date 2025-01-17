<?php
function validaContraseña($contraseña) {
    #Inicialización de variables
    $valida = false; #valor por defecto falso
    $num = false;
    $minus = false;
    $mayus = false;
    $espec = false;
    #Programa
    if (strlen($contraseña) >= 8) { #comprueba si longitud de cadena mayor de 8 caracteres
        for ($i = 0; $i < strlen($contraseña); $i++) { # recorre cada caracter de la cadena
            $char = $contraseña[$i];
            if (ctype_digit($char)) { #comprueba si hay numero 
                $num = true;
            } 
            elseif (ctype_upper($char)) {#comprueba si hay mayuscula 
                $mayus = true;
            } 
            elseif (ctype_lower($char)) {#comprueba si hay minuscula
                $minus = true;
            } 
            elseif (ctype_punct($char)) {#comprueba si hay signo de puntuacion especial
                $espec = true;
            }
        }
    }
    if ($num && $minus && $mayus && $espec) { #si se cumplen las condiciones, valida
        $valida = true;
    }
    #Output
    return $valida;
}
$listaContraseñas = ['11111111111','Hola_comoEstas',"Mi#contraseña@2"];
#Recorremosel $listaContraseñas y mostramos en pantalla si es válida o no
foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña ";
    if (validaContraseña($contraseña)) {
        echo 'válida';
    }
    if (!validaContraseña($contraseña)) {
        echo 'no es válida';
    }
    echo '<br>';
}


