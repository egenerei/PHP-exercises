
<html>
<meta charset="UTF-8"/> 
<body>
    <?php
        /* Escribe un script PHP que tome el día de la semana del sistema y genere como salida el texto “Hoy
            es “, seguido del día de la semana en español.*/
        $fecha = date("l");
        switch ($fecha) {
            case "Monday":
                echo "Hoy es lunes.";
                break;
            case "Tuesday":
                echo "Hoy es martes.";
                break;
            case "Wednesday":
                echo "Hoy es miércoles.";
                break;
            case "Thursday":
                echo "Hoy es jueves.";
                break;
            case "Friday":
                echo "Hoy es viernes.";
                break;
            case "Saturday":
                echo "Hoy es sábado.";
                break;
            case "Sunday":
                echo "Hoy es viernes.";
                break;
        }  
    ?>
</body>
</html>
