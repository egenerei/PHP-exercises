<?php
$user="root";
$password= "";
$dbname="BODEGA";
$server="localhost";
try{
    $conexion= new PDO("mysql:host=$server", $user, $password);
    if (isset($_POST["id_v"])){
        $query = "USE BODEGA;
                    INSERT INTO VINOS(ID_VINO,NOMBRE,BODEGA,REGION,TIPO,EDAD) VALUES (?,?,?,?,?,?);";
        $result = $conexion->prepare($query);
        $result->bindParam(1,$_POST["id_v"]);
        $result->bindParam(2,$_POST["nombre_v"]);
        $result->bindParam(3,$_POST["bodega_v"]);
        $result->bindParam(4,$_POST["region_v"]);
        $result->bindParam(5,$_POST["tipo_v"]);
        $result->bindParam(6,$_POST["edad_v"]);
        $result->execute();
    }
    if (isset($_POST["id_u"])){
        $query = "USE BODEGA;
                    INSERT INTO UVA (ID_UVA,VARIEDAD,ORIGEN,COLOR_PIEL,SABOR) VALUES (?,?,?,?,?);";
        $result = $conexion->prepare($query);
        $result->bindParam(1,$_POST["id_u"]);
        $result->bindParam(2,$_POST["varie_u"]);
        $result->bindParam(3,$_POST["origen_u"]);
        $result->bindParam(4,$_POST["color_u"]);
        $result->bindParam(5,$_POST["sabor_u"]);
        $result->execute();
    }
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}


?>
<form method="POST">
    <label for="id_v">ID VINO</label>
    <input type="text" id="id_v" name="id_v" required>
    <label for="nombre_v">NOMBRE VINO</label>
    <input type="text" id="nombre_v" name="nombre_v" required>
    <label for="bodega_v">BODEGA VINO</label>
    <input type="text" id="bodega_v" name="bodega_v" required>
    <label for="region_v">REGION VINO</label>
    <input type="text" id="region_v" name="region_v" required>
    <label for="tipo_v">TIPO VINO</label>
    <input type="text" id="tipo_v" name="tipo_v" required>
    <label for="edad_v">EDAD VINO</label>
    <input type="text" id="edad_v" name="edad_v" required>
    <button type="submit">Agregar</button>
</form>

<form method="POST">
    <label for="id_u">ID UVA</label>
    <input type="text" id="id_u" name="id_u" required>
    <label for="varie_u">VARIEDAD UVA</label>
    <input type="text" id="varie_u" name="varie_u" required>
    <label for="origen_u">ORIGEN UVA</label>
    <input type="text" id="origen_u" name="origen_u" required>
    <label for="color_u">COLOR PIEL UVA</label>
    <input type="text" id="color_u" name="color_u" required>
    <label for="sabor_u">SABOR UVA</label>
    <input type="text" id="sabor_u" name="sabor_u" required>
    <button type="submit">Agregar</button>
</form>
<a href="form_composicion.php">Añadir composicion a vinos</a>
<a href="form_show_wine"> Mostrar Vinos</a>
<a href="vino_uva.php">Añadir vinos/uvas</a>
