<?php
// Iniciar o resumir la sesión
session_start();

// Incluir las clases
require_once 'clases/empleado.php';
require_once 'clases/departamento.php';

// Crear o recuperar el departamento desde la sesión
if (!isset($_SESSION['departamento'])) {
    $departamento = new Departamento("INFORMÁTICA");
    $_SESSION['departamento'] = serialize($departamento);
}
else{
    // Recupera el departamento desde la sesión
    $departamento = unserialize($_SESSION['departamento']);
}

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];

        if ($accion == 'agregar') {
            $nombreEmpleado = $_POST['nombreEmpleado'];
            $salarioEmpleado = $_POST['salarioEmpleado'];

            // Contratar nuevo empleado
            $empleadoNuevo = new Empleado(count($departamento->obtenerListaEmpleados()) + 1, $nombreEmpleado, $salarioEmpleado);
            $departamento->contratarEmpleado($empleadoNuevo);
            $_SESSION['departamento'] = serialize($departamento);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Departamento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Gestión del departamento - <?php echo $departamento->getNombre(); ?></h1>

<form action="Formulario.php" method="post">
    <label for="nombreEmpleado">Nombre del Empleado:</label>
    <input type="text" name="nombreEmpleado" required>
    <label for="salarioEmpleado">Salario del Empleado:</label>
    <input type="number" name="salarioEmpleado" required>
    <input type="hidden" name="accion" value="agregar">
    <button type="submit">Agregar Empleado</button>
</form>

<!-- Botón para ir a informacion.php -->
<a href="Informacion.php"><button>Ver Información</button></a>

</body>
</html>
