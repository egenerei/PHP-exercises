<?php
    #Documento para crear la base de datos. Una vez ejecutado redirige a form_students.php para introudicr estudiantes
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "Idiomas";
    try {
        $conexion = new PDO("mysql:host=$servidor", $usuario, $clave);
        $consulta ="CREATE DATABASE IF NOT EXISTS $dbname";
        $conexion->query($consulta);
        $consulta = "
            USE $dbname;
            CREATE TABLE IF NOT EXISTS ESTUDIANTES (
            DNI VARCHAR(9) PRIMARY KEY,
            NOMBRE VARCHAR(50) NOT NULL,
            FECHA_NACIMIENTO DATE NOT NULL,
            DOMICILIO VARCHAR(50),
            TELEFONO VARCHAR(9) NOT NULL,
            MAIL VARCHAR(50) NOT NULL
        )";
        $conexion->query($consulta);
        $consulta = "
            USE $dbname;
            CREATE TABLE IF NOT EXISTS GRUPOS (
            ID_GRUPO VARCHAR(9) PRIMARY KEY,
            IDIOMA VARCHAR(20) NOT NULL,
            NIVEL VARCHAR(4) NOT NULL,
            AULA VARCHAR(10) NOT NULL,
            PROFESOR VARCHAR(50) NOT NULL
        )";
        $conexion->query($consulta);
        $consulta = "
            USE $dbname;
            CREATE TABLE IF NOT EXISTS MATRICULA (
            ANO INT,
            ID_GRUPO VARCHAR(9),
            DNI_ESTUDIANTE VARCHAR(9),
            PRIMARY KEY(ANO,ID_GRUPO,DNI_ESTUDIANTE),
            FOREIGN KEY (ID_GRUPO)REFERENCES GRUPOS(ID_GRUPO),
            FOREIGN KEY (DNI_ESTUDIANTE)REFERENCES ESTUDIANTES(DNI)
        )";
        $conexion->query($consulta);
        $conexion = null;
        header("Location: form_students.php");
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }