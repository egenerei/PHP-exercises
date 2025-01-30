<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once 'clases/poliza.php';

// cargamos los datos que nos vienen del $_POST(), que deben haber venido!
//var_dump($_POST);
$yo = new Tomador($_POST['tomador'],$_POST['anoCarnet'],$_POST['sexo']);
$miCarro = new Vehiculo($_POST['matricula'],$_POST['anoMatriculacion'],$_POST['combustible']);
$modalidad = $_POST['modalidad'];

$laPoliza = new Poliza($yo, $miCarro, $modalidad);

echo $laPoliza->ficha();

echo 'PERMITEME QUE INSISTA, son '. $laPoliza->Precio().' euros </br>';
echo '<br>';
//almacenamos $laPoliza en $_SESSION, para no perder el objeto si vamos
//a otra página
$_SESSION['poliza'] = serialize($laPoliza);

echo '<a href="imprime.php" > IMPRIMIR POLIZA DETALLADA </a><br><br>';
echo '<a href="DatosPoliza.html" > OTRA POLIZA </a>';

?>
