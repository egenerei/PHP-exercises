<!DOCTYPE html>
<html lang=”es”>
<head>
<title>Formulario</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>Nombre: </label><input type="text" name="npila"/>
<input type="submit"/>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['npila'];
    }
    echo var_dump($_SERVER['PHP_SELF']);
?>
</body>
</html>