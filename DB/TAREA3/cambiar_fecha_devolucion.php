<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
        $consulta = 'UPDATE PRESTAMOS SET FECHA_DEVOLUCION = CURDATE() WHERE ID_PRESTAMO = 2;';
        $resultado = $conexion->query($consulta);
        echo 'FECHA actualizado';
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;
?>