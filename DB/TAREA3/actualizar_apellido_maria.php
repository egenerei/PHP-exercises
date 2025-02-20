<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
        $consulta = 'UPDATE LECTORES SET EMAIL = "maria2@gmail.com" WHERE NOMBRE = "Maria López";';
        $resultado = $conexion->query($consulta);
        echo 'Email actualizado';
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;
?>