<?php
    $usuario5 = "root";
    $contraseña5= "";
    $dbname = "club_ajedrez";
    $server = "localhost";
    if (isset($_POST["jugador1"])){
        if  ($_POST["jugador1"] != $_POST["jugador2"]){
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
                $query='SELECT IDENTIFICACION_JUGADOR FROM JUGADORES WHERE NOMBRE ="'.$_POST["jugador1"].'";' ;
                $resultado = $conexion->query($query);
                $jugador1 = $resultado->fetch(PDO::FETCH_ASSOC);

                $query='SELECT IDENTIFICACION_JUGADOR FROM JUGADORES WHERE NOMBRE ="'.$_POST["jugador2"].'";' ;
                $resultado = $conexion->query($query);
                $jugador2 = $resultado->fetch(PDO::FETCH_ASSOC);

                $jugador_ganador = "empate";

                if ($_POST['jugador_ganador'] != $jugador_ganador){
                    $query='SELECT IDENTIFICACION_JUGADOR FROM JUGADORES WHERE NOMBRE ="'.$_POST["jugador_ganador"].'";' ;
                    $resultado = $conexion->query($query);
                    $jugador_ganador = $resultado->fetch(PDO::FETCH_ASSOC);
                    $jugador_ganador = $jugador_ganador['IDENTIFICACION_JUGADOR'];

                }
                

                $query="INSERT INTO JUEGOS (ID_JUGADOR_A, ID_JUGADOR_B, FECHA, HORA_INICIO, HORA_FIN, RESULTADO)
                                     VALUES (?,?,?,?,?,?)";
    
                $resultado = $conexion->prepare($query);
                $resultado->bindParam(1, $jugador1['IDENTIFICACION_JUGADOR']);
                $resultado->bindParam(2, $jugador2['IDENTIFICACION_JUGADOR']);
                $resultado->bindParam(3, $_POST["fecha"]);
                $resultado->bindParam(4, $_POST["hora_ini"]);
                $resultado->bindParam(5, $_POST["hora_fin"]);
                $resultado->bindParam(6, $jugador_ganador);
                $resultado->execute();
    
            } 
            catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $conexion = null;
        }
        else{
            echo "¡ERROR! Los jugadores no pueden enfrentarse a si mismos";
        }
    }
    
?>

<form method="POST">
    <label for="jugador1">Jugador A</label>
    <select name="jugador1" id="jugador1">
        <?php
        #Muestra todos los jugadores de la base de datos (se copia esta parte para el segundo jugador y para el ganador)
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
                $query="SELECT NOMBRE FROM JUGADORES";
                $resultado = $conexion->query($query);
                foreach ($resultado->fetchAll() as $key => $value) {
                    #Aqui se crean las opciones para el select
                    echo '<option value="'.$value['NOMBRE'].'">'.$value['NOMBRE'].'</option>';
                }
    
            } 
            catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $conexion = null;
        ?> 
    </select>
    <br>
    <label for="jugador2">Jugador B</label>
    <select name="jugador2" id="jugador2">
        <?php
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
                $query="SELECT NOMBRE FROM JUGADORES";
                $resultado = $conexion->query($query);
                foreach ($resultado->fetchAll() as $key => $value) {
                    echo '<option value="'.$value['NOMBRE'].'">'.$value['NOMBRE'].'</option>';
                }
    
            } 
            catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $conexion = null;
        ?> 
    </select>
    <br>
    <label for="fecha">Fecha partido</label>
    <input type="text" name="fecha" id="fecha" required>
    <br>
    <label for="hora_ini">Hora inicio partido</label>
    <input type="text" name="hora_ini" id="hora_ini" required>
    <br>
    <label for="hora_fin">Hora final partido</label>
    <input type="text" name="hora_fin" id="hora_fin" required>
    <br>
    <label for="jugador_ganador">Jugador ganador</label>
    <select name="jugador_ganador" id="jugador_ganador">
        <?php
            try {
                $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
                $query="SELECT NOMBRE FROM JUGADORES";
                $resultado = $conexion->query($query);
                foreach ($resultado->fetchAll() as $key => $value) {
                    echo '<option value="'.$value['NOMBRE'].'">'.$value['NOMBRE'].'</option>';
                }
    
            } 
            catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            $conexion = null;
        ?> 
        #Añado una tercera opcion como empate
        <option value="empate">Empate</option>
    </select>
    <br>
    <button type="submit">Agregar</button>
</form>
<a href="form_jugadores.php">Agregar Jugadores</a>
<br>
<a href="form_juegos.php">Agregar Partidas</a>
<br>
<a href="ganar_perder.php">Estadisticas de los jugadores</a>