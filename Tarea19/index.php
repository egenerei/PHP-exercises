<?php
$asignaturas = array('IAW','SRI','ASGBD','EIE','ASO','SAD');
echo 'Módulos 2ASIR B </br>';
echo 'Ej Foreach </br>';
foreach ($asignaturas as $a) {
    echo '<li>', $a, '</li>';
}
echo 'Ej For </br>';

for ($i=0; $i < count($asignaturas) ;$i++){
    echo '<li>', $asignaturas[$i],'</li>';
}


