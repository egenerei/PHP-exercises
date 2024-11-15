<?php
include "relacionPaisesEU.php";
$paises = array_keys($EU);
$ciudades = array_values($EU);
shuffle($ciudades);
shuffle($paises);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Seguros Baratos</title>
</head>
<body>
    <form action="juego.php" method="post">
        <label for="pais">Pais</label>
        <select id="pais" name="pais">
            <?php
                foreach ($paises as $value){
                    echo '<option value="'.$value.'">'.$value.'</option>';
                }
            ?>
        </select>
        </br>
        <label for="ciudad">Ciudad</label>
        <select id="rol" name="ciudad">
            <?php
                foreach ($ciudades as $value){
                    echo '<option value="'.$value.'">'.$value.'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>