<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener with IONOS</title>
</head>
<body>
    <form method="post">
        <label for="url">Write the URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Generate Short URL</button>
    </form>
</body>
</html>

<?php
// Función para agregar un registro TXT usando la API de IONOS
function addDnsTxtRecord($domain, $short_code, $long_url) {
    $apiUrl = "https://api.hosting.ionos.com/dns/v1/$domain/records";
    $username = 'your-ionos-username'; // Sustituye por tu usuario de IONOS
    $password = 'your-ionos-password'; // Sustituye por tu contraseña de IONOS

    // Datos del nuevo registro TXT
    $recordData = [
        "type" => "TXT",
        "name" => $short_code,
        "content" => $long_url,
        "ttl" => 3600 // TTL en segundos
    ];

    // Configurar la solicitud cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($recordData));

    // Ejecutar la solicitud y manejar la respuesta
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode === 201; // Código HTTP 201 indica éxito
}

if (isset($_POST["url"])) {
    $my_domain = "egenerei.es";
    $long_url = $_POST["url"];

    // Validar la URL
    if (!filter_var($long_url, FILTER_VALIDATE_URL)) {
        echo "Invalid URL. Please try again.";
        exit;
    }

    // Generar la URL corta
    $short_code = substr(hash('md5', $long_url), 0, 10);
    $short_url = "https://$my_domain/$short_code";
    echo "Short URL: <a href='$short_url' target='_blank'>$short_url</a>";

    // Almacenar la relación en un archivo (puedes cambiarlo por una base de datos)
    $file = 'url_mappings.txt';
    $data = "$short_code -> $long_url" . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND);

    // Configurar el registro TXT en IONOS
    $dnsSuccess = addDnsTxtRecord($my_domain, $short_code, $long_url);
    if ($dnsSuccess) {
        echo "<p>Registro TXT configurado en IONOS correctamente.</p>";
    } else {
        echo "<p>Error al configurar el registro TXT en IONOS.</p>";
    }
}


?>
