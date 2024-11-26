<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autenticación</title>
    
</head>
<body>
    <h1>Escribe tu usuario y contraseña</h1>
    </br>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <legend>Datos personales y envío</legend>
            <label for="usuario">Usuario</label>
            <input type="text" id="suuario" name="usuario">
            </br>
            <label for="contrasena">Contraseña</label>
            <input type="text" id="contrasena" name="contrasena">
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
    <?php
        session_start();
        $usuario = 'jorge';
        $contrasena = 'usuario';
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            if ($_POST['usuario'] == $usuario && $_POST['contrasena'] == $contrasena){
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['contrasena'] = $_POST['contrasena'];
                $_SESSION['validar_inicio']=true;
                header('Location: welcome.php');
            }
            else {
                echo 'Error en el usuario o contraseña';
            }
        }
    ?>
</body>
</html>




