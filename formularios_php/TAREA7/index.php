<?php
// Función para mostrar la notificación
function mostrarNotificacion() {
    // Nombre de la cookie
    $cookie_name = 'notificacion_vista';
    // Duración de la cookie (1 día = 86400 segundos)
    $cookie_duration = 86400;

    // Verifica si la cookie no está establecida
    if (!isset($_COOKIE[$cookie_name])) {
        // Mostrar la notificación
        echo '<div style="background-color: #f4e042; padding: 15px; border: 1px solid #ccc; text-align: center;">
                <p>¡Bienvenido a nuestra página! Este es un mensaje importante para ti.</p>
              </div>';

        // Establecer la cookie con duración de 1 día
        setcookie($cookie_name, '1', time() + $cookie_duration);
    }
}

// Llamada a la función
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
    <h1>Contenido de la Página</h1>
    <p>Este es el contenido principal de la página. La notificación solo se mostrará la primera vez o después de 1 día.</p>
</body>
</html>
