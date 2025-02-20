<?php
$user="root";
$password= "";
$dbname="BODEGA";
$server="localhost";
try{
    $conexion= new PDO("mysql:host=$server", $user, $password);
    $consulta = "CREATE DATABASE IF NOT EXISTS ".$dbname." ;";
    $consulta = $conexion->query($consulta);

    $consulta = "   USE BODEGA;
                    CREATE TABLE VINOS (
                    ID_VINO VARCHAR(2) NOT NULL,
                    NOMBRE VARCHAR(20) NOT NULL,
                    BODEGA VARCHAR(20) NOT NULL,
                    REGION VARCHAR(20) NOT NULL,
                    TIPO VARCHAR(10) NOT NULL,
                    EDAD VARCHAR(10) NOT NULL,
                    PRIMARY KEY (ID_VINO));";
    $consulta =$conexion->query($consulta);

    $consulta = "   USE BODEGA;
                    CREATE TABLE UVA (
                    ID_UVA VARCHAR(2) NOT NULL,
                    VARIEDAD VARCHAR(20) NOT NULL,
                    ORIGEN VARCHAR(20) NOT NULL,
                    COLOR_PIEL VARCHAR(10) NOT NULL,
                    SABOR VARCHAR(10) NOT NULL,
                    PRIMARY KEY (ID_UVA));";
    $consulta =$conexion->query($consulta);

    $consulta = "   USE BODEGA;
                    CREATE TABLE COMPOSICION (
                    ID_VINO VARCHAR(2) NOT NULL,
                    ID_UVA VARCHAR(2) NOT NULL,
                    PORCENTAJE DECIMAL(5,2) NOT NULL,
                    PRIMARY KEY (ID_VINO,ID_UVA),
                    FOREIGN KEY (ID_VINO) REFERENCES VINOS(ID_VINO),
                    FOREIGN KEY (ID_UVA) REFERENCES UVA(ID_UVA));";
    $consulta =$conexion->query($consulta);
    $conexion = null;
}
catch (PDOException $exception){

}
header("Location:form_vino_uva.php");