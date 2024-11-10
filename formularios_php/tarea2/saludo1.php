
<?php
    $rol_final = '';
    var_dump($_POST["roles"]);
    foreach ($_POST["roles"] as $valor){
        $rol_final .= $valor.' '; 
    }
    echo '<p>Bienvenido/a, ' . $_POST["nombre"] . ' (' . $_POST["correo"] . ') '. $rol_final .'</p>';
 
