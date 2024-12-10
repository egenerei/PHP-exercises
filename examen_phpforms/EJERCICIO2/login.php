<?php
    #si la sesion esta iniciada te manda directo a perfil.php
    session_start();
    if (isset($_SESSION['login'])){
        header('Location: perfil.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    session_start();
    #si se ha enviado un nombre en el formulario, te envia a perfil
    if ($_POST['nombre'] != ''){
        $_SESSION['login']= $_POST['nombre'];
        header ('Location: perfil.php');
    }
    