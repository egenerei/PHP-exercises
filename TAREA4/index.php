<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<?php
#Variable initialization
$equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
"Villarreal", "FC Barcelona", "Sevilla", "Getafe",
"Valencia", "Cádiz", "Granada", "Osasuna", "Atlético de Madrid",
"Celta de Vigo", "Eibar", "Huesca", "Elche",
"Alavés", "Levante", "Athletic Club", "Real Valladolid"];
shuffle($equipos);
$locales = array_slice($equipos,9,10);
$visitantes = [] ;
$goles_locales = [] ;
$goles_visitantes = [] ;

#Program
#To include the teams not in randomly generated array $locales
for ($i = 0; $i < count($equipos); $i++){
    if (!in_array($equipos[$i],$locales)){
        $visitantes[] = $equipos[$i];
    }    
}
#To generate 10 random numbers for goals
for ($i = 0; $i < 10; $i++){
    $goles_locales[] = rand(0,6);
    $goles_visitantes[] = rand(0,6);
}
?>
    <table>
        <caption>Game Results </caption>
        <thead>
            <tr>
                <th>Local</th>
                <th>Goals</th>
                <th>Outsider</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($visitantes as $key => $value){
                echo '<tr>';   
                    echo '<td>'.$locales[$key].'<img src="img/escudos/'.$locales[$key].'.jpg" alt="MDN" /></td>';
                    echo '<td>'.$goles_locales[$key].' - '.$goles_visitantes[$key].'</td>';
                    echo '<td>'.$value.'<img src="img/escudos/'.$value.'.jpg" alt="MDN" /></td>';
                echo '</tr>'; 
            }
            ?>
        </tbody>
    </table>

<?php
#Variable generation testing
// echo var_dump($locales);
// echo '</br>';
// echo var_dump($visitantes);
// echo '</br>';
// echo var_dump($goles_locales);
// echo '</br>';
// echo var_dump($goles_visitantes);

?>
</body>
</html>
