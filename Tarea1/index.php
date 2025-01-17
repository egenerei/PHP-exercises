<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        #Longitud de una circunferencia de 12 centímetros de radio y área del círculo asociado.
            #variables
            $radio = 12;
            const pi = 3.141592653;
            #Programa
            $long_circunferencia = $radio * 2 * pi;
            $area_circulo = pi * ($radio ** 2);
            #output
            echo "<h2>Ejercicio 1</h2><h3>La longitud de la circunferencia es: ",$long_circunferencia," y el área del círculo es: ",$area_circulo,". </h3>";
        
        #Resultados de la suma, la resta, el producto, la división, el módulo y la potencia de 7 y 4.
            #variables
            $numero_a = 7;
            $numero_b = 4;
            #programa
            $suma = $numero_a + $numero_b;
            $resta = $numero_a - $numero_b;
            $producto = $numero_a * $numero_b;
            $division = $numero_a / $numero_b;
            $modulo = $numero_a % $numero_b;
            $potencia = $numero_a ** $numero_b;
            #output
            echo "<h2>Ejercicio 2</h2><h3>Los resultados de las operaciones entre los números: " , $numero_a , " y ", $numero_b , " son:</h3> <h3>suma = ", $suma , "</h3> <h3>resta = ", $resta ,"</h3> <h3> producto = ", $producto ,"</h3> <h3> división = ", $division , "</h3> <h3> módulo = " , $modulo ,
                "</h3> <h3> potencia = ", $potencia ,".</h3>";

        #Unsaludo, utilizando dos variables, la primera contiene “Buenos” y la segunda “días”.
            #variables
            $saludo_1 = "Buenos";
            $saludo_2 = " dias.";
            #output
            echo "<h2>Ejercicio 3</h2><h3>",$saludo_1 . $saludo_2, "</h3>";
    ?>

</body>
</html>