<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario,$clave);
        $consulta = "SELECT * FROM libros WHERE ID_LIBRO = (select id_libro from prestamos where DNI_LECTOR = ?) ORDER BY titulo";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(1,$dni);
        $dni = "12345678A";
        $resultado->execute();
        echo "<table><caption>Libros alquilados por  “ 12345678A “</caption>";
        echo "<tr> <th>ID</th> <th>TITULO<th> <th>ESCRITOR</th>";
        while ($tupla = $resultado->fetch()){
        echo "<tr>";
        echo "<td>",$tupla['ID_LIBRO'] , "</td>";
        echo "<td>",$tupla['TITULO'] , "</td>";
        echo "<td>",$tupla['ESCRITOR'] , "</td>";
        echo "</tr>";
        }
        echo "</table>";
        }
        catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
        }
        $conexion = null;
?>