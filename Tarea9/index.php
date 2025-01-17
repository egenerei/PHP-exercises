<html>
<meta charset="UTF-8"/> 
<body>
 <?php
    echo "<h2>Dadas las ventas de un comercio durante una quincena, escribe un script que lleve a la salida a
        cuánto asciende el total de dichas ventas.</h2>";
    $ventas = array(400.50 , 1500 , 800 , 50 , 30 , 10000);
    $total_ventas = 0 ;
    foreach ($ventas as $venta) {
    $total_ventas += $venta ;
    }
    echo "<h3>El total de ventas es: ",$total_ventas ;
 ?>
</body>
</html>