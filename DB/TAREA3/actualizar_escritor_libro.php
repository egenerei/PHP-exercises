<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
        $consulta = 'UPDATE LIBROS SET ESCRITOR = "desconocido" WHERE ID_LIBRO = 856;';
        $resultado = $conexion->query($consulta);
        echo 'LIBRO actualizado';
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;
?>