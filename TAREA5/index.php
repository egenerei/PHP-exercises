<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<?php
#First part
#Variable initialization
$temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
"Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"
=> 23, "Noviembre" => 16, "Diciembre" => 13);
?>
    <table style="border: 2px solid black">
        <caption style="font-family: monospace; font-size: 80px">Gráficos temperaturas mensuales</caption>
        <tbody>
            <?php
            #Program
                foreach ($temperaturas as $key => $value) { #This foreach calculates the amount of - needed
                    echo '<tr style="font-family: monospace; font-size: 40px">'.'<td>'.$key;
                        for ($i = 0;$i < ( 15 - strlen($key) ); $i++ ){
                            echo '-';
                        }
                    echo '>';
                    for ($i = 0;$i < $value ; $i++ ){ #This for calculates the amount of images neede to represent the temperature
                        echo '<img src="images/barraTemp.png" alt="MDN" style="border: 1px solid black"/>';
                    }
                    echo ' '.$value.'ºC</tr>';
                }
            ?>
        </tbody>
<?php
#Second part
#Variable initialization
$temperaturas = array("Enero" => 12.5, "Febrero" => 13.9,
"Marzo" => 14.1, "Abril" => 19, "Mayo" => 25, "Junio" => 31,
"Julio" => 34.4, "Agosto" => 34.45, "Septiembre" => 28,
"Octubre" => 23, "Noviembre" => 16, "Diciembre" => 13.346);         
?>
    <table style="border: 2px solid black">
        <caption style="font-family: monospace; font-size: 80px">Gráficos temperaturas mensuales decimales</caption>
        <tbody>
            <?php
            #Program
                foreach ($temperaturas as $key => $value) { #
                    echo '<tr style="font-family: monospace; font-size: 40px">'.'<td>'.$key;
                        for ($i = 0;$i < ( 15 - strlen($key) ); $i++ ){#This foreach calculates the amount of - needed
                            echo '-';
                        }
                    echo '>';
                    for ($i = 0;$i < (int)$value ; $i++ ){ #This for calculates the amount of images neede to represent the temperature
                        echo '<img src="images/barraTemp.png" alt="MDN" style="border: 1px solid black"/>';
                    }
                    if ($value > (int)$value){ #This if checks if the temperature needs decimal bars 
                        for ($i = 0.1; $i <= ($value - (int)$value);$i += 0.1){
                            echo '<img src="images/decimoBarraTemp.jpg" alt="MDN"/>';
                        }
                    }
                    echo ' '.$value.'ºC</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>