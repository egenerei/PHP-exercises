<?php
require "functions.php";
echo "4 es " .es_par(4) . "<br>";
echo "5 es " .es_par(5) . "<br>";
echo "67.8 es " .es_par(67.8) . "<br>";
echo "pepelu es " .es_par("pepelu") . "<br>";

echo "8 y 7 dan " . ordena_dos(8, 7) . "<br>";
echo "'HOLA' y 'JUAN' dan " . ordena_dos('HOLA', 'JUAN') . "<br>";
echo "'HOLA' y 8 dan " . ordena_dos("HOLA", 8) . "<br>";
echo "TRUE y FALSE dan " . ordena_dos(TRUE, FALSE) . "<br>";

echo "la 'x' se repite en 'extramadurax' " . cuenta_letra("extramadurax", "x") . "<br>";
    echo "la 'a' se repite en 'Granada' " . cuenta_letra("Granada", "a") . "<br>";
    echo "la '' se repite en 'vaya por dios' " . cuenta_letra("vaya por dios", "") . "<br>";
    echo "la 'hola' se repite en 'hola como estas' " . cuenta_letra("hola como estas", "hola") . "<br>";

$array_num = array(1,2,3,4,5,6,7,8);
echo 'La suma_pares de: '.implode("-",$array_num).' es '.suma_pares($array_num).'</br>';