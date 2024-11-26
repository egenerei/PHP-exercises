<?php
session_start();
echo var_dump($_SESSION);

if ($_SESSION['nombre'] != '' && $_SESSION['apellidos'] != ''){
    echo 'Buenos dias, '. $_SESSION['nombre'] .$_SESSION['apellidos'];
    session_destroy();
}
else {
    header('Location: index.html');
}

