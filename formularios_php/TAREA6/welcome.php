<?php
session_start();
echo 'Bienvenido, '.$_SESSION['usuario'];
if ($_SESSION['validar_inicio']==true){
    echo '</br>';
    echo 'Has iniciado sesión correctamente';
    echo '</br>';
    echo '<a href="logout.php">Logout</a>';
}
else{
    echo 'No has iniciado sesión correctamente';
    echo '<a href="logout.php">Vuelve a iniciar</a>';
}