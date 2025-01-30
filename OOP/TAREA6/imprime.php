<?php
//el temilla de la sesion, antes de cualquier cosa!!
if (!isset($_SESSION)) {
    session_start();
}
//requerimos las clase necesarias
require_once 'clases/poliza.php';

//recuperamos los objetos de la sesion
$laPoliza = unserialize($_SESSION['poliza']);

//ponemos la ficha de la poliza en gordo!
echo '<h3>'. $laPoliza->ficha().'</h3> <br>';
echo '<h3> RECARGOS Y DESCUENTOS </h3> <br>';
echo $laPoliza->detalle();

//devolvemos el control al formulario
echo '<br><a href="DatosPoliza.html" > OTRA POLIZA </a>';
?>
