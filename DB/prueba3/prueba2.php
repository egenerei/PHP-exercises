<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario,$clave);
        $consulta = "SELECT * FROM libros WHERE titulo = ? ORDER BY titulo";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(1,$titulo);
        $titulo = "Don Quijote de la Mancha";
        $resultado->execute();
        echo "<table><caption>Libros con titutlo “ $titulo “</caption>";
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
