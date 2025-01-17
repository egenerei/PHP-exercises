<html>
<meta charset="UTF-8"/> 
<body>
 <?php
    echo "<h2>¿Sabrías explicar qué hace este código?</h2>";
    echo "<h3>Este código lee un array de las clases y el número de alumnos en cada una de ellas y las muestra en pantalla utilizando la referencia dada a cada valor.</h3>";
    #
    $puestos = array("A210" => 28, "A211" => 30, "A212" => 32, "A213" => 28);
    echo "<table> <caption>PUESTOS POR AULA</caption>";
    echo "<tr> <th>Aula</th> <th>Número de puestos</th></tr>";
    foreach ($puestos as $aula => $numpuestos) {
    echo "<tr><td>", $aula, "</td><td>", $numpuestos, "</td></tr>" ;
    }
    echo "</table>";
    #
    echo "<h2>#A continuación, aplica la función var_dump a la variable puestos y explica el resultado que obtienes.</h2></br>";
    echo var_dump($puestos);
    echo "</br><h3>var_dump nos da el tamaño del array, la referencia de cada valor almacenado, el tipo de valor de cada miembro y el valor almacenado en ese miembro. </h3>";
 ?>
</body>
</html>