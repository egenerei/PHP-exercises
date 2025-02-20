<?php
    $user="root";
    $password= "";
    $dbname="BODEGA";
    $server="localhost";
    try{
        if (isset($_POST["uva"])){
            $id_uva = $_POST["uva"];
            $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
            $query="SELECT ID_VINO FROM COMPOSICION WHERE ID_UVA = (?);";
            $exquery= $conexion->prepare($query);
            $exquery->bindParam(1,$id_uva);
            $exquery->execute();
            $result=$exquery->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $key => $value){
                
                $query="SELECT * FROM VINOS WHERE ID_VINO = (?);";
                $exquery= $conexion->prepare($query);
                $exquery->bindParam(1,$value["ID_VINO"]);
                $exquery->execute();
                $result=$exquery->fetch(PDO::FETCH_ASSOC);
                echo "----------------------------------------------------";
                echo "</br>";
                echo "ID DEL VINO: ".$result["ID_VINO"];
                echo "</br>";
                echo "NOMBRE DEL VINO: ".$result["NOMBRE"];
                echo "</br>";
                echo "BODEGA: ".$result["BODEGA"];
                echo "</br>";
                echo "REGION: ".$result["REGION"];
                echo "</br>";
                echo "TIPO: ".$result["TIPO"];
                echo "</br>";
                echo "EDAD: ".$result["EDAD"];
                echo "</br>";
                echo "----------------------------------------------------";
            }
            $conexion =null;
        }
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
?>
<html>
<body>
<form method="POST">
    <label for="uva">Mostrar de que usan la uva: </label>
    <select name="uva" id="uva">
        <?php
            try{

                $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
                $query = "SELECT DISTINCT ID_UVA FROM COMPOSICION;";
                $result = $conexion->query($query);
                $vinos = $result->fetchAll();
                foreach($vinos as $key => $value){
                    echo "<option value=".$value["ID_UVA"].">".$value["ID_UVA"]."</option>";
                }
                $conexion =null;
            }
            catch (PDOException $exception){
                echo "Fallo de conexión", $exception->getmessage();
            }
            
        ?>
    </select>
    <button type="submit">Mostrar</button>
</form>
<a href="form_composicion.php">Añadir composicion a vinos</a>
<a href="form_show_wine"> Mostrar Vinos</a>
<a href="vino_uva.php">Añadir vinos/uvas</a>
</body>
</html>