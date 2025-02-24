<?php
    $usuario5 = "root";
    $contraseña5= "";
    $dbname = "club_ajedrez";
    $server = "localhost";
    try {
        #Conexion a base de datos y creacion (si no existe)
        $conexion5 = new PDO('mysql:host=localhost', $usuario5, $contraseña5);
        $query="CREATE DATABASE IF NOT EXISTS club_ajedrez;";
        $conexion5->query($query);
        echo "Base creada";
        #Creacion de tablas
        $query="USE club_ajedrez;
                    CREATE TABLE IF NOT EXISTS JUGADORES (
                        IDENTIFICACION_JUGADOR VARCHAR(10) PRIMARY KEY,
                        NOMBRE VARCHAR(20),
                        ELO DECIMAL(4,0),
                        FECHA_NAC DATE,
                        MAIL VARCHAR(50),
                        TELEFONO DECIMAL(9)
                    );
                    CREATE TABLE IF NOT EXISTS JUEGOS(
                    ID_JUGADOR_A VARCHAR(10),
                    ID_JUGADOR_B VARCHAR(10),
                    FECHA DATE,
                    HORA_INICIO VARCHAR(5),
                    HORA_FIN VARCHAR(5),
                    RESULTADO VARCHAR(10),
                    PRIMARY KEY (ID_JUGADOR_A, ID_JUGADOR_B, FECHA),
                    FOREIGN KEY (ID_JUGADOR_A) REFERENCES JUGADORES (IDENTIFICACION_JUGADOR),
                    FOREIGN KEY (ID_JUGADOR_B) REFERENCES JUGADORES (IDENTIFICACION_JUGADOR) 
                    );
        ";
        $conexion5->query($query);
    } 
    catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $conexion5 = null;
    header("Location:form_jugadores.php");
?>