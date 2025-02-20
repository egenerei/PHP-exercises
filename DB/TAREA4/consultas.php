<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "Musica";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if ($_POST ['tarea']== 'todo'){
        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT * FROM clientes";
            $resultado = $conexion->query($consulta);
            $clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<h1>Clientes</h1>";
            foreach ($clientes as $cliente) {
                echo "-----------------------------------------";
                echo "<br>";
                echo "NIF ".$cliente['NIF'];
                echo "<br>";
                echo "Nombre ".$cliente['NOMBRE'];
                echo "<br>";
                echo "Apellidos ".$cliente['APELLIDOS'];
                echo "<br>";
                echo "MAIL ".$cliente['MAIL'];
                echo "<br>";
                echo "Telefono ".$cliente['TELEFONO'];
                echo "<br>";
            }
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getmessage();
        }
        $conexion = null;
        echo "-----------------------------------------";

    }
    if ($_POST ['tarea']== 'nombre'){
        try {
        
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT NOMBRE FROM clientes";
            $resultado = $conexion->query($consulta);
            $clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<h1>Clientes</h1>";
            foreach ($clientes as $cliente) {
                echo "-----------------------------------------";
                echo "<br>";
                echo "Nombre ".$cliente['NOMBRE'];
                echo "<br>";
                
            }
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getmessage();
        }
        echo "-----------------------------------------";
        $conexion = null;

    }
    if ($_POST ['tarea']== 'nif'){
        try {
        
            $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $clave);
            $consulta = "SELECT NIF FROM clientes";
            $resultado = $conexion->query($consulta);
            $clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<h1>Clientes</h1>";
            foreach ($clientes as $cliente) {
                echo "-----------------------------------------";
                echo "<br>";
                echo "Nombre ".$cliente['NIF'];
                echo "<br>";
                
            }
        }
        catch (PDOException $exception){
            echo "Fallo de conexión", $exception->getmessage();
        }
        echo "-----------------------------------------";
        $conexion = null;

    }

}

?>
<form method="POST">
    <select name="tarea">
        <option value="nombre">Muestra los nombres de los clientes</option>
        <option value="todo">Muestra todos los datos</option>
        <option value="nif">Muestra los NIFs</option>
    </select>
    <button type="submit">Ejecuta</button>

</form>
<a href="altas.php">Ir a Altas</a>