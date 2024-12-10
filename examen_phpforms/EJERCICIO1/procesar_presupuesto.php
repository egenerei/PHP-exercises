<?php
    #Incializacion de variables/constantes
    #Precios por metro
    const precio_50= 30;
    const precio_100= 25;
    const precio_150= 20;
    const precio_200= 15;

    #Cantidad de metros que establecemos por rango
    const metros_50 = 50;
    const metros_100 = 100;
    const metros_150 = 150;
    const metros_200 = 500;

    #Coste de servicios
    const pintura = 10;
    const fontaneria = 15;
    const electricidad = 20;
    const albanileria = 25;

    #Coste de calidad de servicio total * x
    const economico = 1;
    const standard = 1.5;
    const premium = 2;

    #Variables 
    $total = 0;
    $servicios = 0;
    $seleccion_servicios = '';
    $tamano = 0;
    $material = 'empty';

    #debugging
    #echo var_dump($_POST);
    
    #programa
    #control de datos introducidos
    if ($_POST['tamano'] != 0){
        $tamano = $_POST['tamano'];
    }
    else{
        echo 'Tamaño no escogido';
        echo '<a href="presupuesto_form.php">Vuelve al cuestionario</a>';
    }

    if ($_POST['material'] != 'empty'){
        $material = $_POST['material'];
    }
    else{
        echo 'Material no escogido';
        echo '<a href="presupuesto_form.php">Vuelve al cuestionario</a>';
    }

    #Calculo de precios
    #precio base metros * precioxmetro
    if ($tamano == metros_50 ){
        $total = $tamano * precio_50;
    }
    if ($tamano == metros_100 ){
        $total = $tamano * precio_100;
    }
    if ($tamano == metros_150 ){
        $total = $tamano * precio_150;
    }
    if ($tamano == metros_200 ){
        $total = $tamano * precio_200;
    }

    #calculo coste de servicios
    if (isset($_POST['pintura'])){
        $servicios += $tamano * pintura;
        $seleccion_servicios .= 'pintura ';
    }
    if (isset($_POST['fontaneria'])){
        $servicios += $tamano * fontaneria;
        $seleccion_servicios .= 'fontaneria ';
    }
    if (isset($_POST['electricidad'])){
        $servicios += $tamano * electricidad;
        $seleccion_servicios .= 'electricidad ';
    }
    if (isset($_POST['albanileria'])){
        $servicios += $tamano * pintura;
        $seleccion_servicios .= 'albañilería ';
    }

    #sum de servicios al precio total
    $total += $servicios;

    #calculo de calidad * total
    if ($material == 'economico'){
        $total *= economico;
    }
    if ($material == 'standard'){
        $total *= standard;
    }
    if ($material == 'premium'){
        $total *= premium;
    }

    echo '</br>';
    echo 'El tamaño elegido es: '.$tamano;
    echo '</br>';
    echo 'Servicios seleccionados: '.$seleccion_servicios;
    echo '</br>';
    echo 'Tipo de material: '.$material;
    echo '</br>';
    echo 'Precio total estimado: '.$total;
    
    echo '<a href="presupuesto_form.php">Vuelve a comprar con nosotros :)</a>';

