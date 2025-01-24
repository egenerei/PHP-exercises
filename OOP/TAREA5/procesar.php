<?php
require_once("clases/equipo.php");
require_once("clases/futbolista.php");
session_start();

if (!isset($_SESSION["equipo"])) {
    $_SESSION["equipo"] = new Equipo('Los patitos Voladores');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] === 'resetear') {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion'])) {
    $equipo = $_SESSION['equipo'];
    
    if ($_POST['accion'] === 'añadir') {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $posicion = $_POST['posicion'];

        $futbolista = new Futbolista($nombre, $edad, $posicion);
        $equipo->anadirFutbolista($futbolista);
    }

    if ($_POST['accion'] === 'eliminar') {
        $nombre = $_POST['nombre'];
        $equipo->eliminarFutbolista($nombre);
    }
}
header('Location: programa.php');
exit();