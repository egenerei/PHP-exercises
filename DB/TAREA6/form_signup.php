<?php
    #Documento para matricular alumnos en los grupos. 
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Idiomas";
    if (isset($_POST['idioma'])) {
        try {
            #Obtener el ID_GRUPO a partir del IDIOMA y NIVEL.
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT ID_GRUPO FROM GRUPOS WHERE IDIOMA = ? AND NIVEL = ? LIMIT 1";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $_POST['idioma']);
            $resultado->bindParam(2, $_POST['nivel_alumno']);
            $resultado->execute();
            #Guardo el ID_CURSO para usarlo posteriormente.
            $id_curso = $resultado->fetch(PDO::FETCH_ASSOC)["ID_GRUPO"];

            #Obtener DNI del alumno a partir de su NOMBRE.
            $consulta = "SELECT DNI FROM ESTUDIANTES WHERE NOMBRE = ? LIMIT 1";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $_POST['nombre_alumno']);
            $resultado->execute();
            #Guarda DNI.
            $dni_alumno = $resultado->fetch(PDO::FETCH_ASSOC) ["DNI"];

            #Obtiene el ano actual y con el DNI e ID_GRUPO introduce al alumno en la tabla MATRICULA.
            $ano_actual = getdate()["year"];
            $consulta = "INSERT INTO MATRICULA (ANO, ID_GRUPO, DNI_ESTUDIANTE) VALUES (?,?,?)";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(1, $ano_actual);
            $resultado->bindParam(2, $id_curso);
            $resultado->bindParam(3, $dni_alumno);
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
    <title>Language School Levels</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        try {
        
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT DISTINCT NIVEL FROM GRUPOS";
            $resultado = $conexion->query($consulta);
            var_dump($resultado);
            echo '
                <h1>Nivel</h1>
                <form method="POST">
                    <label for="nivel_alumno">Nivel Idioma</label>
                    <select name="nivel_alumno" id="nivel_alumno">
            ';
            #Obtiene todos los niveles que existen en la tabla GRUPOS. 
            foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $nivel) {
                echo "<option value='".$nivel['NIVEL']."'>".$nivel['NIVEL']."</option>"; 
            }
            echo "
                    </select>
                    <br>";
            $consulta = "SELECT NOMBRE FROM ESTUDIANTES ORDER BY NOMBRE ASC";
            $resultado = $conexion->query($consulta);
            echo '
                    <label for="nombre_alumno">Nombre Alumno</label>
                    <select name="nombre_alumno" id="nombre_alumno">
            ';
            #Obtiene todos los nombres de todos los estudiantes y los muestra.
            foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $nombre) {
                echo "<option value='".$nombre['NOMBRE']."'>".$nombre['NOMBRE']."</option>"; 
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
    <a href="form_show_students.php">Mostrar Estudiantes</a>
</body>
</html>
