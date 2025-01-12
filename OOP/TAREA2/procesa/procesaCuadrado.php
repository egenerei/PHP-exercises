<?php
#echo $_GET['lado']."circulo_procesa";
require_once "../clases/cuadrado.php";
$objeto = new Cuadrado($_GET['lado']);
#Paso los datos del objeto a una variable para trabajar de manera más sencilla
$datos = $objeto->ficha();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cuadrado: resultados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
        <h1> Resultados del cuadrado </h1>
        <h3>Lado: <?php echo $datos["lado"];?></h3>
        <h3>Área: <?php echo $datos["area"];?></h3>
        <h3>Perímetro: <?php echo $datos["perimetro"];?></h3>
        <form action="../menuFigurasPlanas.html" method="get">
            <button type="submit">Volver al menú</button>
        </form>
        </center>
    </body>
    </body>
</html>