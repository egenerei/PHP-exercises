<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Escribe un script PHP que, dada una edad guardada en una variable, cree un párrafo en el
        documento HTML con un mensaje que indique si corresponde a una persona mayor o menor de
        edad.*/
        $edad = "18";
        if (is_numeric($edad)) {
            if($edad >=18) {
                echo "<p>Es mayor de edad</p>";
            }
            else{
                echo "<p>Es menor de edad</p>";
            } 
            
        }
        else {
            echo "Invalido";
        }
      
    ?>
</body>
</html>