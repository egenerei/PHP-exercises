<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario,$clave);
        $consulta = "SELECT LIBROS.TITULO FROM libros INNER JOIN prestamos on LIBROS.ID_LIBRO = PRESTAMOS.ID_LIBRO WHERE PRESTAMOS.DNI_LECTOR = ? ORDER BY TITULO";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(1,$dni);
        $dni = "12345678A";
        $resultado->execute();
        echo "<table><caption>Libros alquilados por  “ 12345678A “</caption>";
        echo "<tr><th>TITULO<th>";
        while ($tupla = $resultado->fetch()){
        echo "<tr>";
        echo "<td>",$tupla['TITULO'] , "</td>";
        echo "</tr>";
        }
        echo "</table>"; 
        }
        catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
        }
        $conexion = null;
?>