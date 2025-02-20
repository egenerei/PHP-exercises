<?php
    $servidor = "localhost";
    $usuario = "root"; 
    $clave = "";
    $dbname = "biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
        $consulta = "INSERT INTO Libros (ID_LIBRO,TITULO,ESCRITOR) VALUES (?,?,?);";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(1, $isbn);
        $resultado->bindParam(2, $titulo);
        $resultado->bindParam(3, $autor);
        $isbn = '8467044810';
        $titulo = 'Don Quijote de la Mancha';
        $autor = 'Miguel de Cervantes Saavedra';
        $resultado->execute();
        $consulta = "INSERT INTO Libros (ID_LIBRO,TITULO,ESCRITOR) VALUES (:ID_LIBRO,:TITULO,:ESCRITOR);";
        $resultado = $conexion->prepare($consulta);
        $isbn = '856';
        $titulo = 'Don Quijote de la Concha';
        $autor = 'Abalos';
        $resultado->execute(array(':ID_LIBRO'=>$isbn,':TITULO'=> $titulo,':ESCRITOR'=> $autor));
        echo " Se han añadido los datos de un libro ";

    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;
 ?>