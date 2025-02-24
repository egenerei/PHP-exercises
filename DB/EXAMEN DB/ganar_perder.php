<?php
    $usuario5 = "root";
    $contraseña5= "";
    $dbname = "club_ajedrez";
    $server = "localhost";
    if (isset($_POST["jugador1"])){
        try {
            #A partir del nombre del jugador, obtengo su IDENTIFICACION_JUGADOR
            echo "<h2>Registro de partidas del jugador: ".$_POST["jugador1"]."</h2>";
            $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $usuario5, $contraseña5);
            $query='SELECT IDENTIFICACION_JUGADOR FROM JUGADORES WHERE NOMBRE ="'.$_POST["jugador1"].'";' ;
            $resultado = $conexion->query($query);
            $jugador1 = $resultado->fetch(PDO::FETCH_ASSOC);

            #Obtengo toda la informacion de las partidas del jugador
            $query='SELECT * FROM JUEGOS WHERE ID_JUGADOR_A ="'.$jugador1['IDENTIFICACION_JUGADOR'].'" or ID_JUGADOR_B ="'.$jugador1['IDENTIFICACION_JUGADOR'].'";' ;
            $resultado = $conexion->query($query);
            $resul_partida = $resultado->fetchAll(PDO::FETCH_ASSOC);  

            #Por cada partida, voy a imprimir los datos

            foreach($resul_partida as $key => $value){
                #Obtengo en jugador contrario al que hemos elegido (ya que nuestro jugador puede estar en la columna A o B de la tabla juegos)
                #Le doy valor por defecto a al jugador b y luego compruebo si esta correcto para ahorrar un paso
                $jugador2 = $value['ID_JUGADOR_B'];
                if($jugador1['IDENTIFICACION_JUGADOR'] == $jugador2){
                    $jugador2 = $value['ID_JUGADOR_A'];
                }
                #Obtengo el nombre del jugador 2 usando el id
                $query="SELECT NOMBRE FROM JUGADORES WHERE IDENTIFICACION_JUGADOR = $jugador2";
                $resultado = $conexion->query($query);
                $jugador2 = $resultado->fetch();
                #Imprimo la info de cada partida
                echo "--------------------------";
                echo "<br>";
                echo "Se enfrentó a: ".$jugador2['NOMBRE'];
                echo "<br>";
                echo "Se enfrentó el dia: ".$value['FECHA'];
                echo "<br>";
                echo "La hora de inicio: ".$value['HORA_INICIO'];
                echo "<br>";
                echo "La hora de finalizacion: ".$value['HORA_FIN'];
                echo "<br>";
                echo "El resultado fué: ";
                echo "<br>";
                #Segun el valor del campo RESULTADO, imprimo el resultado
                if ($value['RESULTADO'] == $jugador1['IDENTIFICACION_JUGADOR']){
                    echo "Ganó ".$_POST["jugador1"];
                    echo "<br>";
                }
                if ($value['RESULTADO'] == "empate"){
                    echo  $_POST["jugador1"]." empató";
                    echo "<br>";
                }
                if ($value['RESULTADO'] != "empate" && $value['RESULTADO'] != $jugador1['IDENTIFICACION_JUGADOR']) {
                    echo "Ganó ".$jugador2['NOMBRE'];
                    echo "<br>";
                }

            }
            echo "--------------------------";
            echo "<br>";  

            #Calculo la cantidad de partidas perdidas, empatadas y ganadas del jugador
            $gana = 0;
            $pierde = 0;
            $empate = 0;
            foreach ($resul_partida as $key => $value) {
                if ($value['RESULTADO'] == $jugador1['IDENTIFICACION_JUGADOR']){
                    $gana +=1;
                }
                if ($value['RESULTADO'] == "empate"){
                    $empate += 1;
                }
                if ($value['RESULTADO'] != "empate" && $value['RESULTADO'] != $jugador1['IDENTIFICACION_JUGADOR']) {
                    $pierde += 1;
                }
            }
            echo "--------------------------";
            echo "<br>";

            echo "<h2>".$_POST["jugador1"]."<br> Ha ganado: ".$gana."<br> Ha perdido: ".$pierde."<br> Ha empatado: ".$empate."</h2>";
            

        } 
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $conexion = null;
    }
    
?>

<form method="POST">
    <label for="jugador1">Jugador del que se quieren conocer los datos</label>
    <select name="jugador1" id="jugador1">
        <?php
            try {
                #Obtengo el nombre de todos los jugadores
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
    
    <button type="submit">Buscar</button>
</form>
<a href="form_jugadores.php">Agregar Jugadores</a>
<br>
<a href="form_juegos.php">Agregar Partidas</a>
<br>
<a href="ganar_perder.php">Estadisticas de los jugadores</a>
<br>