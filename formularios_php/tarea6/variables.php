<?php
session_start();
if (isset($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];
}
if (isset($_POST['apellidos'])){
    $_SESSION['apellidos'] = $_POST['apellidos'];
}

header('Location: 3.php');



