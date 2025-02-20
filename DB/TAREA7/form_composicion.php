<?php
    $user="root";
    $password= "";
    $dbname="BODEGA";
    $server="localhost";
    try{
        if (isset($_POST["vino"])){
            $id_vino = $_POST["vino"];
            $id_uva = $_POST["uva"];
            $porcentaje = $_POST["porcentaje"];
            $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
            $query="INSERT INTO COMPOSICION (ID_VINO,ID_UVA,PORCENTAJE) VALUES (?,?,?);";
            $exquery= $conexion->prepare($query);
            $exquery->bindParam(1,$id_vino);
            $exquery->bindParam(2,$id_uva);
            $exquery->bindParam(3,$porcentaje);
            $exquery->execute();
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
    <label for="vino">Vino</label>
    <select name="vino" id="vino">
        <?php
            try{

                $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
                $query = "SELECT ID_VINO FROM VINOS;";
                $result = $conexion->query($query);
                $vinos = $result->fetchAll();
                foreach($vinos as $key => $value){
                    echo "<option value=".$value["ID_VINO"].">".$value["ID_VINO"]."</option>";
                }
                $conexion =null;
            }
            catch (PDOException $exception){
                echo "Fallo de conexión", $exception->getmessage();
            }
            
        ?>
    </select>
    <label for="uva"><Uva></label>
    <select name="uva" id="uva">
        <?php
            try{
                $conexion= new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
                $query = "SELECT ID_UVA FROM UVA;";
                $result = $conexion->query($query);
                $uvas = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach($uvas as $key => $value){
                    echo "<option value=".$value["ID_UVA"].">".$value["ID_UVA"]."</option>";
                }
                $conexion =null;
            }
            catch (PDOException $exception){
                echo "Fallo de conexión", $exception->getmessage();
            }
            
        ?>
    </select>
    <label for="porcentaje">Porcentaje</label>
    <input type="text" name="porcentaje" id=porcentaje>
    <button type="submit">Agregar</button>
</form>
<a href="form_composicion.php">Añadir composicion a vinos</a>
<a href="form_show_wine"> Mostrar Vinos</a>
<a href="vino_uva.php">Añadir vinos/uvas</a>
</body>
</html>