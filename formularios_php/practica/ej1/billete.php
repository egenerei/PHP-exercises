<?php
    include("datosBillete.php");
    echo var_dump($_POST);
    $fecha_actual = date('Y-m-d');
    $fecha_ida = $_POST['ida'];
    $fecha_vuelta = $_POST['vuelta'];
    $total = 0;
    if (!isset($_POST['destino'])){
        echo'Error, destino no elegido';
    }
    if ($fecha_actual > $fecha_ida || $fecha_actual != $fecha_ida){
        echo 'Error la fecha de ida es incorrecta';
    }
    if ($fecha_vuelta < $fecha_ida ){
        echo 'Error la fecha de vuelta es incorrecta';
    }

    