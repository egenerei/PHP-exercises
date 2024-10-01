<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Mejora el código anterior para que no se lleve a la salida el último espacio en blanco.*/
        for ($x=0; $x <= 10; $x++) {
            if ($x == 10) {
                echo $x;
            }
            else {
                echo $x." "; 
            }
        }
        echo "</br>";
        /*Los números pares comprendidos entre 50 y 80.*/
        for ($y=50; $y >= 50 and $y <= 80 and $y % 2 == 0; $y++) {
            if ($y % 2 == 0) {
                if ($y == 80) {
                    echo $y;
                }
                else {
                    echo $y." "; 
                }
            }
        }
        echo "</br>";
        /*Los números enteros entre 17 y-17.*/
        for ($z=-17; $z <= 17; $z++) {
            if ($z == 17) {
                echo $z;
            }
            else {
                echo $z." "; 
            }
        }
        echo "</br>";
        /*La tabla de multiplicar del número 6.*/
        for ($n=0; $n <= 10; $n++) {
            $m = 6 ;
            if ($n == 10) {
                echo $m * $n;
            }
            else {
                echo $m * $n." "; 
            }
        }
    ?>
</body>
</html>
