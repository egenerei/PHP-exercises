<?php
    #Documento para introducir estudiantes.
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Idiomas";
    if (isset($_POST['dni'])){
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "
                USE $dbname;
                INSERT INTO ESTUDIANTES (DNI, NOMBRE, FECHA_NACIMIENTO, DOMICILIO, TELEFONO, MAIL) VALUES (?,?,?,?,?,?);
                ";
            $resultado=$conexion->prepare($consulta);
            $resultado->bindParam(1,$_POST['dni']);
            $resultado->bindParam(2,$_POST['nombre']);
            $resultado->bindParam(3,$_POST['fecha']);
            $resultado->bindParam(4,$_POST['domicilio']);
            $resultado->bindParam(5,$_POST['telefono']);
            $resultado->bindParam(6,$_POST['mail']);
            $resultado->execute();
            $conexion = null;
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getmessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language School Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST">
        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni" required>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="fecha">Fecha nacimiento</label>
        <input type="text" id="fecha" name="fecha" required>
        <br>
        <label for="domicilio">Dirección</label>
        <input type="text" id="domicilio" name="domicilio" required>
        <br>
        <label for="telefono">Telefono</label>
        <input type="tel" id="telefono" name="telefono" required>
        <br>
        <label for="mail">Email</label>
        <input type="mail" id="mail" name="mail" required>
        <br>
        <button type="submit">Añadir</button>
    </form>
    <a href="form_groups.php">Add Groups</a>
    <a href="form_signup.php">Sign up students to groups</a>
</body>
</html>
