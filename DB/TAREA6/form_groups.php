<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Idiomas";
    if (isset($_POST['id_grupo'])){
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "
                USE $dbname;
                INSERT INTO GRUPOS (ID_GRUPO, IDIOMA, NIVEL, AULA, PROFESOR) VALUES (?,?,?,?,?);
                ";
            $resultado=$conexion->prepare($consulta);
            $resultado->bindParam(1,$_POST['id_grupo']);
            $resultado->bindParam(2,$_POST['idioma']);
            $resultado->bindParam(3,$_POST['nivel']);
            $resultado->bindParam(4,$_POST['aula']);
            $resultado->bindParam(5,$_POST['nombre']);
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
    <label for="id_grupo">ID Grupo</label>
    <input type="text" id="id_grupo" name="id_grupo" required>
    <br>
    <label for="idioma">Idioma</label>
    <select name="idioma" id="idioma">
        <option value="Ingles">Inglés</option>
        <option value="Frances">Francés</option>
        <option value="Italiano">Italiano</option>
    </select>
    <br>
    <label for="nivel">Nivel Idioma</label>
    <select name="nivel" id="nivel">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2.1">B2.1</option>
        <option value="B2.2">B2.2</option>
        <option value="C1.1">C1.1</option>
        <option value="C1.2">C1.2</option>
    </select>
    <br>
    <label for="aula">Aula</label>
    <input type="text" id="aula" name="aula" required>
    <br>
    <label for="nombre">Nombre Profesor</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <button type="submit">Añadir</button>
</form>
    <a href="form_students.php">Añadir Estudiantes</a>
    <a href="form_show_students.php">Mostrar Estudiantes</a>
</body>