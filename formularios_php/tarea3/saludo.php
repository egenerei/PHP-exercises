
<?php
    // $rol_final = 'Rol no introducido por el usuario';
    // if (isset($_POST['roles'])){
    //     $rol_final = implode(',',$_POST['roles']);
    // }
    if (empty($_POST['nombre'])){
        echo 'Error: Nombre no introducido, recarga la página';
    }
    if (empty($_POST['email'])){
        echo 'Error: Email no introducido, recarga la página';
    }
    if (empty($_POST['roles'])){
        echo 'Error: Rol/es no introducido/s, recarga la página';
    }
    if (!empty($_POST['roles'])&& !empty($_POST['email'])&& !empty($_POST['nombre'])){
        echo '<p>Bienvenido/a, ' . $_POST["nombre"] . ' (' . $_POST["correo"] . ') '. $rol_final .'</p>';
    }
    
 
