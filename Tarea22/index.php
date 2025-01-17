<?php
$audiencia = array('spider woman'=>array('sesion1'=> 25,'sesion2'=> 50,'sesion3'=> 125),
                   'la cenicienta'=>array('sesion1'=> 4,'sesion2'=> 3,'sesion3'=> 33),
                   'arma3'=>array('sesion1'=> 100,'sesion2'=> 180,'sesion3'=> 220)
                );

foreach($audiencia as $peli => $detalles){ #Recorre el array $audiencia y extrae las diferentes películas asignando el valor del nombre de l apelícula a $peli
    echo '<h2>'. $peli.'</h2>';
    $total=0;
    
    foreach($detalles as $sesion => $espectadores){ 
        echo '-'.$sesion.' : '.$espectadores.' espectadores'.'</br>';
        $total += $espectadores;
    }
    echo 'Total de espectadores de la película '. $peli. ' : '.$total.'</br>';

}
