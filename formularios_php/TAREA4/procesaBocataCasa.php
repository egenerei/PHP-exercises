<?php
#variables
const base = 2;
$oferta = 0.25;
$precio = base;
$tipo = $_POST['bocadillo'];
$tamano = $_POST['tamano'];
$recoger = $_POST['entrega'];
$opciones = [
    "jamon-queso" => "Clásico jamón y queso",
    "vegetariano-mediterraneo" => "Vegetariano mediterráneo",
    "pollo-cesar" => "Pollo césar",
    "atun-pimientos" => "Atún y pimientos",
    "caprese-italiano" => "Caprese italiano",
    "carne-mechada-queso" => "Carne mechada con queso fundido",
    "huevo-bacon" => "Huevo y bacon",
    "pavo-aguacate" => "Pavo con aguacate",
    "tortilla-espanola" => "Bocadillo de tortilla de patatas",
    "chorizo-queso-crema" => "Chorizo picante con queso crema",
];
$tamanos = [
    "pequeno" => "pequeño",
    "mediano" => "mediano",
    "grande" => "grande",
    "super" => "supergrande",
];

#programa
switch ($tamano) {
    case 'pequeno':
        $precio += 1;
        break;
    case 'mediano':
        $precio += 1.5;
        break;
    case 'grande':
        $precio += 2;
        break;
    case 'super':
        $precio += 3;
        break;
}

if (isset($_POST['publi1'])){
    $precio -= $oferta;
}

if (isset($_POST['publi2'])){
    $precio -= $oferta;
}

if (isset($_POST['publi3'])){
    $precio -= $oferta;
}

switch ($tipo){
    case 'jamon-queso':
        $precio += 0.5;
        break;
    case 'pollo-cesar':
        $precio += 0.25;
        break;
    default:
        break;
}

echo 'El precio de su bocata '. $opciones[$tipo] .' '. $tamanos[$tamano].' es de: '.$precio.' euros.';
echo '</br>';
echo '<button><a href="bocataCasa.html">Pide otro</a></button>';
