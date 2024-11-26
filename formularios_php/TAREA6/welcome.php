<?php
session_start();
if ($_SESSION['validar_inicio']==true){
    echo 'Bienvenido, '.$_SESSION['usuario'];
    echo '</br>';
    echo '<a href="logout.php">Logout</a>';
}
