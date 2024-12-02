
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="billete.php" method="post">
        <fieldset>
            <label for="sevilla" ><input type="radio" name="destino" id="sevilla" value="sevilla">Sevilla</label>
            <label for="madrid" ><input type="radio" name="destino" id="madrid" value="madrid">Madrid</label>
            <label for="barcelona" ><input type="radio" name="destino" id="barcelona" value="barcelona">Barcelona</label>
            <label for="valencia" ><input type="radio" name="destino" id="valencia" value="valencia">Valencia</label>
        </fieldset>
        <fieldset>
            <label for="clase">Clase</label>
            <select id="clase" name="clase">
                <option value="VIP">VIP</option>
                <option value="chungo">Chungo</option>

            </select>
            <label for="comida"><input type="checkbox" value="true" name="comida">Comida</label>
            
            <label for="almohadilla"><input type="checkbox" value="true" name="almohadilla">Almohadilla</label>
            
            <label for="wifi"><input type="checkbox" value="true" name="wifi">WIFI</label>
            

        </fieldset>
        <fieldset>
            <label for="ida">Fecha IDA</label>
            <input type="date" name="ida" id="ida">
            <label for="vuelta">Fecha VUELTA</label>
            <input type="date" name="vuelta" id="vuelta">
        </fieldset>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>