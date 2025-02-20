<?php
class Cliente{
public $IdCliente;
public $Nombre;
public $Contacto;
public $Cargo;
public $Ciudad;
public $Pais;
public $Telefono;
}
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "bendetto";
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $clave);
    $consulta = "SELECT Nombre,Telefono FROM clientes WHERE CIUDAD = ? ORDER BY nombre";
    $resultado = $conexion->prepare($consulta);
    $resultado->bindParam(1,$ciudad);
    $ciudad="Berlin";
    $resultado->execute();
    while ($cliente = $resultado->fetchObject('Cliente')) {
        echo "<br>";
        echo "nombre ".$cliente->Nombre;
        echo "<br>";
        echo "telefono ".$cliente->Telefono;
    }
#var_dump($cliente);
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}
$conexion = null;
?>