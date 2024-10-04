<?php
$bebidas = array('Café','Té','Agua','Cerveza','Vino','Refresco');
echo '<h1>Escoja entre una de estas ',count($bebidas),' bebidas</h1>';
echo '<ul>';
foreach ($bebidas as $b) {
    echo '<li>', $b, '</li>';
}
echo '</ul>';

