
<?php
    $rol_final = 'Rol no introducido por el usuario';
    if (isset($_POST['roles'])){
        $rol_final = implode(',',$_POST['roles']);
    }
    echo '<p>Bienvenido/a, ' . $_POST["nombre"] . ' (' . $_POST["correo"] . ') '. $rol_final .'</p>';
 
