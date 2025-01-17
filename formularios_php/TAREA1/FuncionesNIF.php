<?php
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

