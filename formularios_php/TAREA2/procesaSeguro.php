<?php
#variables
const precio_base_seguro = 200;
$ano_actual = 2024;
$nombre = $_POST['nombre'];
$ano_carnet = $_POST['carnet'];
$sexo = $_POST['sexo'];
$matricula = $_POST['matricula'];
$ano_matricula = $_POST['ano_matricula'];
$combustible = $_POST['tipo'];
$seguro = $_POST['modalidad'];

#program

$total = precio_base_seguro;
if ($ano_actual - $ano_carnet <10){
    $total = precio_base_seguro * 2;
    if ($sexo == 'mujer'){
        $total -= ($total * 0.1);
    }
}
    
if ($ano_actual - $ano_matricula > 10){
    $total += 100; 
}

switch($combustible){
    case 'diesel':
        $total += ($total * 0.3);
        break;
    case 'electrico':
        $total -= ($total * 0.3);
        break;
    case 'glp':
        break;
    case 'gasolina':
        break;
}

switch($seguro){
    case 'intermedia':
        $total += 200;
        break;
    case 'todo_riesgo':
        $total *= 2;
        break;
}

echo '<h1>Datos de la póliza</h1></br>'.
     '<h2>Datos del tomador</h2></br>'.
     '<p>Nombre del tomador: '.$nombre.'</p></br>'.
     '<p>Año de obtención del carnet: '.$ano_carnet.'</p></br>'.
     '<p>SEXO: '.$sexo.'</p></br></br>'.
     '<h2>Datos del vehículo</h2></br>'.
     '<p>Año de matriculación: '.$ano_matricula.'</p></br>'.
     '<p>Matrícula: '.$matricula.'</p></br></br>'.
     '<h2>Modalidad</h2></br>'.
     '<p>TIPO: '.$seguro.'</p></br></br>'.
     '<h2>TOTAL</h2></br>'.
     '<p>El presupuesto del seguro para tu vehículo con matrícula: '.$matricula.' es de: '.$total.'</p>';

echo '</br>';
echo '<button><a href="index.html">Otro seguro</a></button>';
