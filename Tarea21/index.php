<?php
$temperaturas = array(
    array(1, 12, 26),
    array(2, 11, 24),
    array(3, 15, 24),
    array(4, 13, 25),
    array(5, 14, 23),
    array(6, 16, 27),
    array(7, 12, 22),
    array(8, 15, 28),
    array(9, 11, 24),
    array(10, 13, 20),
    array(11, 10, 21),
    array(12, 14, 22),
    array(13, 12, 23),
    array(14, 16, 26),
    array(15, 17, 29),
    array(16, 14, 25),
    array(17, 13, 24),
    array(18, 15, 26),
    array(19, 12, 20),
    array(20, 14, 21),
    array(21, 13, 27),
    array(22, 15, 28),
    array(23, 12, 25),
    array(24, 14, 29),
    array(25, 11, 22),
    array(26, 13, 23),
    array(27, 12, 21),
    array(28, 15, 24),
    array(29, 11, 26),
    array(30, 10, 25)
);
$temp_alta = 0;
for ($dia = 1; $dia < count($temperaturas); $dia++) {
    if ($temperaturas[$temp_alta][2] <= $temperaturas[$dia][2]){
        $temp_alta = $dia;
    }
}

echo 'El día mas caluroso fué el: '.$temperaturas[$temp_alta][0].' con una temperatura de: '. $temperaturas[$temp_alta][2];

#Print the last day with the highest temp of the month
