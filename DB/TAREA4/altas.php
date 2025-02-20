<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Musica";
    try {
        $conexion = new PDO("mysql:host=$servidor", $usuario, $clave);
        $consulta ="CREATE DATABASE IF NOT EXISTS $dbname";
        $conexion->query($consulta);
        $consulta = "
            USE $dbname;
            CREATE TABLE IF NOT EXISTS CLIENTES (
            NIF VARCHAR(15) PRIMARY KEY,
            NOMBRE VARCHAR(15) NOT NULL,
            APELLIDOS VARCHAR(50) NOT NULL,
            MAIL VARCHAR(50),
            TELEFONO INT NOT NULL
        )";
        $conexion->query($consulta);
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nif = $_POST["nif"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $mail = $_POST["mail"];
        $telefono = $_POST["telefono"];
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "INSERT INTO CLIENTES (NIF,NOMBRE,APELLIDOS,MAIL,TELEFONO) VALUES (?,?,?,?,?)";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $nif);
            $resultado->bindParam(2, $nombre);
            $resultado->bindParam(3, $apellidos);
            $resultado->bindParam(4, $mail);
            $resultado->bindParam(5, $telefono);
            $resultado->execute();
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getmessage();
        }
        $conexion = null;

    }
?>
<form method="POST">
    <label for="nif">NIF del cliente</label>
    <input type="text" id="nif" name="nif" required>
    <br>
    <label for="nombre">Nombre del cliente</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="apellidos">Apellidos del cliente</label>
    <input type="text" id="apellidos" name="apellidos" required>
    <br>
    <label for="mail">Mail del cliente</label>
    <input type="email" id="mail" name="mail" required>
    <br>
    <label for="telefono">telefono</label>
    <input type="number" id="telefono" name="telefono" required>
    <br>
    <button type="submit">Agregar cliente</button>
</form>
<a href="consultas.php">Ir a Consultas</a>