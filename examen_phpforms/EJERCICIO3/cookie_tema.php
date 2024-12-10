<?php
    if (isset($_COOKIE['tema'])){
        $tema = $_COOKIE['tema'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20;
            <?php if ($tema === 'oscuro'): ?>
                background-color: #333;
                color: #fff;
            <?php else : ?>
                background-color: #fff;
                color: #000;
            <?php endif ; ?>
        }
    </style>
</head>
<body>
    <form action="cookie_tema.php" method="post">
        <label for="claro">Claro</label>
        <input type="radio" name="tema" id="claro" value="claro">
        <label for="oscuro">Oscuro</label>
        <input type="radio" name="tema" id="oscuro" value="oscuro">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if ($_POST['tema'] != ''){
        setcookie('tema', $_POST['tema'], time()+60*60*24*7);
    }
    
?>