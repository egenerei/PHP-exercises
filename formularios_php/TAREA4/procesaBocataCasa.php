<?php
#variables
const BASE = 2;
$oferta = 0.25;
$precio = BASE;
$tipo = $_POST['bocadillo'];
$tamano = $_POST['tamano'];
$recoger = $_POST['entrega'];
$opciones = [
    "jamon-queso" => "clásico jamón y queso",
    "vegetariano-mediterraneo" => "vegetariano mediterráneo",
    "pollo-cesar" => "pollo césar",
    "atun-pimientos" => "atún y pimientos",
    "caprese-italiano" => "caprese italiano",
    "carne-mechada-queso" => "carne mechada con queso fundido",
    "huevo-bacon" => "huevo y bacon",
    "pavo-aguacate" => "pavo con aguacate",
    "tortilla-espanola" => "bocadillo de tortilla de patatas",
    "chorizo-queso-crema" => "chorizo picante con queso crema",
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

foreach (['publi1', 'publi2', 'publi3'] as $publi) {
    if (isset($_POST[$publi])) {
        $precio -= $oferta;
    }
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

echo 'El precio de su bocata '. $opciones[$tipo] .' '. $tamanos[$tamano].' es de: '.number_format($precio, 2).' euros.';
echo '</br>';
echo '<button><a href="bocataCasa.html">Pide otro</a></button>';
