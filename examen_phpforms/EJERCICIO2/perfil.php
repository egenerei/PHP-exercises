<?php
    session_start();
    #debugging
    echo var_dump($_SESSION);
    #si se establecio session y por tanto tiene valor continua ejecucion dando saludo
    if ($_SESSION['login'] != ''){
        echo 'Bienvenido: '.$_SESSION['login'];
        echo  '</br>';
        echo '<a href="logout.php">Logout</a>';
    }
    else{
        header ('Location: login.php');
    }