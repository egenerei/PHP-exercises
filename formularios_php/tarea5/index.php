<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”es”>
<body>
<?php
echo "<div>Usuario: ", $_SESSION["usuario"], "</div>";
echo "<div>Rol: ", $_SESSION["rol"], "</div>";
echo var_dump($_SESSION);
?>
</body>
</html>

