<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Vuelve a escribir los scripts anteriores utilizando el bucle while.*/ 
        /* Mejora el código anterior para que no se lleve a la salida el último espacio en blanco.*/
        echo "<h2>Reflexiona</h2></br><h3> ¿Cuál es el número de veces mínimo que se ejecutan las instrucciones que contiene un bucle do …
            while? ¿Y en los bucles anteriores?</h3></br><h4>1 sola vez. En los anteriores 0.</h4>";
        
        $x=0;
        do {
            if ($x == 10) {
                echo $x;
            }
            else {
                echo $x." "; 
            }
            $x++;
        } while ( $x <= 10) ;
        echo "</br>";
        /*Los números pares comprendidos entre 50 y 80.*/
        $y = 50;
        do {
            if ($y % 2 == 0) {
                if ($y == 80) {
                    echo $y;
                }
                else {
                    echo $y." "; 
                }
            }
            $y++;
        } while ($y >= 50 and $y <= 80 and $y % 2 == 0);
        echo "</br>";
        /*Los números enteros entre 17 y-17.*/
        $z=-17;
        do {
            if ($z == 17) {
                echo $z;
            }
            else {
                echo $z." "; 
            }
            $z++;
        } while ($z <= 17);
        echo "</br>";
        /*La tabla de multiplicar del número 6.*/
        $n=0;
        do {
            $m = 6 ;
            if ($n == 10) {
                echo $m * $n;
            }
            else {
                echo $m * $n." "; 
            }
            $n++;
        } while ($n <= 10);
    ?>
</body>
</html>