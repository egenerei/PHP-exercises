<?php
$days = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday") ;
$rain = array("12","13","45","10213","1","0","12") ;
$day_rain= array_combine( $days, $rain ) ;
$total_rain =0;
foreach ($day_rain as $amount){
    $total_rain += $amount;
}

echo "La lluvia que ha caido durante la semana: ".$total_rain;