<html>
<meta charset="UTF-8"/> 
<body>
 <?php
    echo "<h2>¿Sabrías explicar qué hace este código?</h2>";
    echo "<h3>Este código lee un array de bebidas y las muestra en pantalla asignando a una variable local el valor de cada miembro del array.</h3>";
    $bebidas = array("Café","Té","Agua","Cerveza","Vino","Refresco");
    echo "<h1>BEBIDAS</h1>";
    echo "<ul>";
    foreach ($bebidas as $b) {
    echo "<li>", $b, "</li>";
    }
    echo "</ul>";
    echo "<h2>#A continuación, aplica la función var_dump a la variable bebidas y explica el resultado que obtienes.</h2></br>";
    echo var_dump($bebidas);
    echo "</br><h3>var_dump nos da el tamaño del array, el número de posición de cada miembro, el tipo de valor de cada miembro, la longitud de caracteres y el valor almacenado en ese miembro. </h3>";
 ?>
</body>
</html>