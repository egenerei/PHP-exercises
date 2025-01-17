<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Facturación</title>
</head>
<body>
    <h1>Formulario de Facturación</h1>
    <form action="procesar_factura.php" method="POST">
        <label for="numero_factura">Número de Factura:</label>
        <input type="text" id="numero_factura" name="numero_factura" required><br><br>

        <label for="fecha_facturacion">Fecha de Facturación:</label>
        <input type="date" id="fecha_facturacion" name="fecha_facturacion" required><br><br>

        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required><br><br>

        <label for="direccion_cliente">Dirección del Cliente:</label>
        <input type="text" id="direccion_cliente" name="direccion_cliente" required><br><br>

        <label for="nif_cif">NIF/CIF del Cliente:</label>
        <input type="text" id="nif_cif" name="nif_cif" required><br><br>

        <label for="servicio">Servicio Realizado:</label>
        <textarea id="servicio" name="servicio" rows="4" cols="50" required></textarea><br><br>

        <label for="precio_sin_iva">Precio sin IVA (€):</label>
        <input type="number" id="precio_sin_iva" name="precio_sin_iva" required><br><br>

        <input type="submit" value="Enviar Factura">
    </form>
</body>
</html>
