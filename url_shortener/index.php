<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="url">Introduce la URL que quieres acortar</label>
        <input type="text" name="url" id="url">
        <button type="submit">Acortar</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $long_url= $_POST['url'];
        $long_url_hash = substr(hash('md5',$long_url),0,10);
        $short_url='egenerei.es/'.$long_url_hash;
        echo $short_url;
    }
