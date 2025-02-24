<?php
    $usuario5 = "root";
    $contraseña5 = "";
    $dbname = "club_ajedrez";
    $server = "localhost";
    if (isset($_POST["id"])){
        #Comprobacion del elo del jugador antes de introducirlo en la BD
        if  ($_POST["elo"] <= 3000 && $_POST["elo"] >= 400){
            try {
                #Asignación de valores a la consulta para introducir jugador
                $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
                $query="INSERT INTO JUGADORES (IDENTIFICACION_JUGADOR, NOMBRE, ELO, FECHA_NAC, MAIL, TELEFONO)
                                     VALUES (?,?,?,?,?,?)";
                $resultado = $conexion->prepare($query);
                $resultado->bindParam(1, $_POST["id"]);
                $resultado->bindParam(2, $_POST["nombre"]);
                $resultado->bindParam(3, $_POST["elo"]);
                $resultado->bindParam(4, $_POST["date"]);
                $resultado->bindParam(5, $_POST["mail"]);
                $resultado->bindParam(6, $_POST["telefono"]);
                $resultado->execute();
    
            } 
            catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $conexion = null;
        }
        else {
            echo "¡ERROR! Elo del jugador incorrecto";
        }
    }
    
?>

<form method="POST">
    <label for="id">Id jugador</label>
    <input type="text" name="id" id="id" required>
    <br>
    <label for="nombre">Nombre jugador</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="elo">ELO jugador</label>
    <input type="number" name="elo" id="elo" required>
    <br>
    <label for="fecha">Fecha Nacimiento jugador</label>
    <input type="text" name="date" id="date" required>
    <br>
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail" required>
    <br>
    <label for="telefono">Telefono</label>
    <input type="number" name="telefono" id="telefono" required>
    <br>
    <button type="submit">Agregar</button>
</form>
<a href="form_juegos.php">Agregar Partidas</a>
<br>
<a href="ganar_perder.php">Estadisticas de los jugadores</a>
<br>
<a href="ganar_perder.php">Estadisticas de los jugadores</a>