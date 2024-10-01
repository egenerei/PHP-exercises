<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Vuelve a escribir los scripts anteriores utilizando el bucle while.*/ 
        /* Mejora el código anterior para que no se lleve a la salida el último espacio en blanco.*/
        $x=0;
        while ( $x <= 10) {
            if ($x == 10) {
                echo $x;
            }
            else {
                echo $x." "; 
            }
            $x++;
        }
        echo "</br>";
        /*Los números pares comprendidos entre 50 y 80.*/
        $y = 50;
        while ($y >= 50 and $y <= 80 and $y % 2 == 0) {
            if ($y % 2 == 0) {
                if ($y == 80) {
                    echo $y;
                }
                else {
                    echo $y." "; 
                }
            }
            $y++;
        }
        echo "</br>";
        /*Los números enteros entre 17 y-17.*/
        $z=-17;
        while ($z <= 17) {
            if ($z == 17) {
                echo $z;
            }
            else {
                echo $z." "; 
            }
            $z++;
        }
        echo "</br>";
        /*La tabla de multiplicar del número 6.*/
        $n=0;
        while ($n <= 10) {
            $m = 6 ;
            if ($n == 10) {
                echo $m * $n;
            }
            else {
                echo $m * $n." "; 
            }
            $n++;
        }
    ?>
</body>
</html>
