<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Idiomas";
    if (isset($_POST['idioma'])) {
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            #Obtiene el ID_GRUPO a partir del IDIOMA y NIVEL
            $consulta = "SELECT ID_GRUPO FROM GRUPOS WHERE IDIOMA = ? AND NIVEL = ? LIMIT 1";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $_POST['idioma']);
            $resultado->bindParam(2, $_POST['nivel_alumno']);
            $resultado->execute();
            $id_curso = $resultado->fetch(PDO::FETCH_ASSOC)["ID_GRUPO"];

            #Obtiene los DNI de los estudiantes de cada grupo a partir de ID_GRUPO
            $consulta = "SELECT DNI_ESTUDIANTE FROM MATRICULA WHERE ID_GRUPO = ?";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $id_curso);
            $resultado->execute();
            $dni_alumnos = $resultado->fetchALL(PDO::FETCH_ASSOC);

            #Recorre el array de DNI para obtener los nombres de alumnos a partir de su DNI
            foreach ($dni_alumnos as $key => $value) {
                $consulta = "SELECT NOMBRE FROM ESTUDIANTES WHERE DNI = ?";
                $resultado = $conexion->prepare($consulta);
                $resultado->bindParam(1, $value["DNI_ESTUDIANTE"]);
                $resultado->execute();
                $nombre_alumno = $resultado->fetch(PDO::FETCH_ASSOC);
                echo "<h2>Alumno : ".$nombre_alumno["NOMBRE"]."</h2>";
                echo "<br>";
            }
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
    <title>Language School Levels</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT DISTINCT NIVEL FROM GRUPOS";
            $resultado = $conexion->query($consulta);
            echo '
                <h1>Mostrar estudiantes</h1>
                <form method="POST">
                    <label for="nivel_alumno">Nivel Idioma</label>
                    <select name="nivel_alumno" id="nivel_alumno">
            ';
            foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $nivel) {
                echo "<option value='".$nivel['NIVEL']."'>".$nivel['NIVEL']."</option>"; 
            }
            echo "
                    </select>
                    <br>";
            $consulta = "SELECT DISTINCT IDIOMA FROM GRUPOS";
            $resultado = $conexion->query($consulta);
            echo '
                    <label for="idioma">Idioma</label>
                    <select name="idioma" id="idioma">
            ';
            foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $idioma) {
                echo "<option value='".$idioma['IDIOMA']."'>".$idioma['IDIOMA']."</option>"; 
            }
            echo "
                    </select>
                    <br>
                    <button type='submit'>Enviar</button>
                </form>
            ";
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getMessage();
        }
        
        $conexion = null;
    ?>
    <a href="form_groups.php">Add Groups</a>
    <a href="form_students.php">Añadir Estudiantes</a>
    <a href="form_show_students.php">Show the students of each group</a>
</body>
</html>