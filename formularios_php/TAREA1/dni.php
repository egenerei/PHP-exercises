
<?php
$dni = $_POST['dni'];
function calculaLetraNIF($dni){
    $result = 'EL DNI introducido no es correcto';
    if (ctype_digit($dni) && strlen((string)$dni) == 8){
        $resto_letras = [0 => "T", 1 => "R", 2 => "W", 3 => "A", 4 => "G", 5 => "M", 6 => "Y", 7 => "F",
            8 => "P", 9 => "D", 10 => "X", 11 => "B", 12 => "N", 13 => "J", 14 => "Z",
            15 => "S", 16 => "Q", 17 => "V", 18 => "H", 19 => "L", 20 => "C", 21 => "K",
            22 => "E"];
        $result = $resto_letras[$dni%23];
    }
    return $result;
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
    if (strlen($dni) == 8) { #Si solo se introducen 8 cifras se considera que se está buscando averiguar la letra del NIF
        $letra = calculaLetraNIF($dni);
        echo "La letra correspondiente al DNI es: " . $letra;
    } elseif (strlen($dni) == 9) { #Si se introducen 9 caracteres, se busca validar el NIF
        if (verificadorNIF($dni)) {
            echo "El NIF es válido.";
        } else {
            echo "El NIF no es válido.";
        }
    } else {
        echo "El DNI/NIF introducido no es correcto.";
    }
}
if (empty($dni)){ #Por si no se introduce el DNI
    echo 'DNI no introducido';
}