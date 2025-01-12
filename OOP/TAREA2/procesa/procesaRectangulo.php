<?php
#echo $_GET['lado']."circulo_procesa";
require_once "../clases/rectangulo.php";
$objeto = new Rectangulo($_GET['lado1'],$_GET['lado2']);
$datos = $objeto->ficha();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rectangulo: resultados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
        <h1> Resultados del rectangulo </h1>
        <h3>Lado: <?php echo $datos["lados"]["lado1"];?></h3>
        <h3>Lado: <?php echo $datos["lados"]["lado2"];?></h3>
        <h3>Área: <?php echo $datos["area"];?></h3>
        <h3>Perímetro: <?php echo $datos["perimetro"];?></h3>
        <form action="../menuFigurasPlanas.html" method="get">
            <button type="submit">Volver al menú</button>
        </form>
        </center>
    </body>
    </body>
</html>