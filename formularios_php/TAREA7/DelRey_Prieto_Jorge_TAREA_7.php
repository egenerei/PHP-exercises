<?php

function mostrarNotificacion() {
 
    $cookie_name = 'notificacion_vista';

    $cookie_duration = 86400;

    if (!isset($_COOKIE[$cookie_name])) {
       
        echo '<div style="background-color: #f4e042; padding: 15px; border: 1px solid #ccc; text-align: center;">
                <p>¡Bienvenido a nuestra página! Este es un mensaje importante para ti.</p>
              </div>';

        
        setcookie($cookie_name, '1', time() + $cookie_duration);
    }
}


mostrarNotificacion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación con Cookie</title>
</head>
<body>
    <h1>Página de cookies</h1>
    <p>Jorge Del Rey. La notificación solo aparece la primera vez o después de 1 día.</p>
</body>
</html>
