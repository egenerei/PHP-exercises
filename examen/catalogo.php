<?php
require "almacen.php"; #require añade los archivos creados con las funciones, los arrays y los datos del restaurante
require "datosTienda.php";
require "funcionesTienda.php";
echo '<h1>'.'<<'.str_pad(nombre_res5,42,"-",STR_PAD_BOTH).'>>'.'</h1></br>';
echo '<h2>DATE UN CAPRICHO</h1></br>';
echo '<h3>'.str_pad('JUEGOS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($juegos5 as $juego => $precio){ #cada bucle foreach recorre el array que corresponde dandole formato a cada dato e imprimiendo por pantalla
    echo '<p>'.str_pad($juego,50,"_",STR_PAD_RIGHT).$precio.'</p></br>';
}
echo '<h3>'.str_pad('COMICS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($comics5 as $comic => $precio){
    echo '<p>'.str_pad($comic,50,"_",STR_PAD_RIGHT).$precio.'</p></br>';
}
echo '<h3>'.str_pad('NOVELAS',50,"*",STR_PAD_BOTH).'</h3></br>';
foreach($novelas5 as $novela => $precio){
    echo '<p>'.str_pad($novela,50,"_",STR_PAD_RIGHT).$precio.'</p></br>';
}

echo 'ENCUÉNTRANOS EN : '. $direccion5.'</br>'; 

echo 'SI NO ENCUENTRAS ALGO, ESCRÍBENOS A: '. $email5.'</br>';