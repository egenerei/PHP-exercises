<?php
#include
include "relacionPaisesEU.php";

#variables
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$mensaje = 'La ciudad que has seleccionado es: '.$ciudad.' y el país es: '.$pais;

#program
echo $mensaje.'</br>';
if ($EU[$pais] == $ciudad){
    echo 'Acertaste</br>';
}
else{
    echo 'Fallaste</br>';
    echo 'La capital de '.$pais. ' es '.$EU[$pais];
}

echo '<button><a href="index.php">Vuelve a jugar</a></button>';