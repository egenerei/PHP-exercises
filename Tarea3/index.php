<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Escribe un script PHP que tome la hora del sistema y genere como salida:
            ● “Buenos días”, si aún no son las 12:00 del mediodía.
            ● “Buenas tardes”, si son más de las 12:00 pero aún no son las 22:00.
            ● “Buenas noches”, de las 22:00 en adelante.*/
        $hora = date("H");
        if ($hora < "12") {
                echo "<p>Buenos días</p>";
        }
        elseif ($hora >= "12" and $hora < "22") {
                echo "<p>Buenas Tardes</p>";
        } 
        else {
            echo "<p>Buenas noches</p>";
        }  
    ?>
</body>
</html>