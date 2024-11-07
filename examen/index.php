<?php

require "almacen.php"; #require añade los archivos creados con las funciones, los arrays y los datos de la tienda
require "datosTienda.php";
require "funcionesTienda.php";

$totalCompra = 0;

$clavesJuegos5 = array_keys($juegos5); #extrae las claves de cada uno de los arrays
$clavesComics5 = array_keys($comics5);
$clavesNovelas5 = array_keys($novelas5);

shuffle($clavesJuegos5); #mezclo las claves de los juegos dentro del array
shuffle($clavesComics5);
shuffle($clavesNovelas5);

$juegosCompra5= array_slice($clavesJuegos5,0,rand(1,2)); #variable que almacena los juegos que compras
$comicsCompra5= array_slice($clavesComics5,0,rand(1,2));
$novelasCompra5= array_slice($clavesNovelas5,0,rand(1,2));

echo '<h1>'.'<<'.str_pad(nombre_res5,42,"-",STR_PAD_BOTH).'>>'.'</h1></br>';
echo '<h2>TU CARRITO</h1></br>';
echo '<h3>'.str_pad('JUEGOS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($juegosCompra5 as $juego){ # recorre cada array y escupe los valores
    echo '<p>'.str_pad($juego,50,"_",STR_PAD_RIGHT).$juegos5[$juego].'</p></br>'; #uno los arrays de las claves con el original para extraer el precio
    $totalCompra += $juegos5[$juego]; #sumo el precio de cada juego al total
}
echo '<h3>'.str_pad('COMICS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($comicsCompra5 as $comic){
    echo '<p>'.str_pad($comic,50,"_",STR_PAD_RIGHT).$comics5[$comic].'</p></br>';
    $totalCompra += $comics5[$comic];
}
echo '<h3>'.str_pad('NOVELAS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($novelasCompra5 as $novela){
    echo '<p>'.str_pad($novela,50,"_",STR_PAD_RIGHT).$novelas5[$novela].'</p></br>';
    $totalCompra += $novelas5[$novela];
}
#ERROR: se me ha olvidado usar la funcion sumaTotal para el precio
echo '<h3>PRECIO CARRITO: '.str_pad($totalCompra,40,"_",STR_PAD_LEFT).'</h3></br>';
echo '<h3>'.str_pad('Con la PROMO '.$promocion5,50,"*",STR_PAD_BOTH).'</h3></br>';
echo '<h3>'.str_pad('PRECIO DEL CARRITO '.number_format(precioConDescuento($totalCompra,$descuento5),2),50,"*",STR_PAD_BOTH).'</h3></br>';
echo '<h3>La entrega del pedido está prevista para el '. fechaEntrega($diasEntrega5) .'</h3></br>';
