<?php
require_once("clases/equipo.php");
require_once("clases/futbolista.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Patitos Voladores: Gestión del club</title>
</head>
<body>

<h1>Bienvenido a "Los Patitos Voladores"</h1>

<h2>Añadir un Futbolista</h2>
<form action="procesar.php" method="post">
    <input type="hidden" name="accion" value="añadir">
    Nombre: <input type="text" name="nombre" required><br>
    Edad: <input type="number" name="edad" required><br>
    Posición: <input type="text" name="posicion" required><br>
    <button type="submit">Añadir Futbolista</button>
</form>

<h2>Eliminar un Futbolista</h2>
<form action="procesar.php" method="post">
    <input type="hidden" name="accion" value="eliminar">
    Nombre del futbolista: <input type="text" name="nombre" required><br>
    <button type="submit">Eliminar Futbolista</button>
</form>

<h2>Resetear el Equipo</h2>
<form action="procesar.php" method="POST">
    <input type="hidden" name="accion" value="resetear">
    <button type="submit">Resetear el equipo</button>
</form>


<?php
if (isset($_SESSION["equipo"])) {
    echo"<h2>Jugadores Actuales</h2>";
    echo "<br>";
    $equipo = $_SESSION['equipo'];
    echo "<br>";
    $equipo->MostrarJugadores();
}
?>
</body>
</html>