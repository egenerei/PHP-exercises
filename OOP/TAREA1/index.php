<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
require 'circulo.php';
$circulo = new Circulo(3);
if ($circulo->esCirculo()) {
echo "El área del círculo de radio " . $circulo->getRadio() . " es " .
round($circulo->getArea(), 2) . " y el perímetro es " .
round($circulo->getPerimetro(), 2);
echo " <br> <br> Que sí, que el área del círculo de radio " . $circulo->getRadio() . " es " .
$circulo->getAreaR(4) . " y el perímetro es " . $circulo->getPerimetroR(4);
} else {
echo "No sabes lo que es un círculo.";
}
?>
</body>
</html>