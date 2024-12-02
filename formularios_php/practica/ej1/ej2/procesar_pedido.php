<?php
    session_start();
    $producto = $_POST['tipo'];
    $marca = $_POST['marca'];
    $unidades = $_POST['unidades'];
    $_SESSION['producto'] = $producto;
    $_SESSION['marca'] = $marca;
    $_SESSION['unidades'] = $unidades;
    echo var_dump($_POST);
    
    if ($marca == 'acana' && $producto == 'pienso') {
        $_SESSION['precio'] = 35 ;
    }
    if ($marca == 'royal-canin' && $producto == 'pienso') {
        $_SESSION['precio'] = 35 * $unidades;
    }
    if ($marca == 'acana' && $producto == 'correas') {
        $_SESSION['precio'] = 20 * $unidades;
    }
    if ($marca == 'royal-canin' && $producto == 'correas') {
        $_SESSION['precio'] = 35 * $unidades;
    }
    
    header('Location: mostrar_pedido.php');