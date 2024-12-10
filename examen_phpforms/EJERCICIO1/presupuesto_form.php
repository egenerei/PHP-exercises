<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar_presupuesto.php" method="post" >
        <fieldset>
            <legend>Escoja el tamaño</legend>
            <select name="tamano" id="tamano">
                <!--Añado opcion vacía para controlar que el usuario eliga una de las opciones-->
                <option value="0"></option>
                <option value="50">50m2</option>
                <option value="100">de 51m2 a 100m2</option>
                <option value="150">de 100m2 a 150m2</option>
                <option value="500">mas de 150m2</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Servicios requeridos</legend>
            <label for="pintura">Pintura</label>
            <input type="checkbox" name="pintura" id="pintura" value="true">
            <label for="fontaneria">Fontanería</label>
            <input type="checkbox" name="fontaneria" id="fontaneria" value="true">
            <label for="electricidad">Electricidad</label>
            <input type="checkbox" name="electricidad" id="electricidad" value="true">
            <label for="albanileria">Albañileria</label>
            <input type="checkbox" name="albanileria" id="albanileria" value="true">
        </fieldset>
        <fieldset>
            <legend>Tipo de material</legend>
            <select name="material" id="material">
                <!--Añado opcion vacía para controlar que el usuario eliga una de las opciones-->
                <option value="empty"></option>
                <option value="economico">Económico</claro">
                <option value="standard">Standard</option>
                <option value="premium">Premium</option>
            </select>
        </fieldset>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>