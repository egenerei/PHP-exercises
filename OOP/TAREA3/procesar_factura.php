<?php
require "factura.php";
$factura = new Formulario ($_POST['numero_factura'],$_POST['fecha_facturacion'],$_POST['nombre_cliente'],$_POST['direccion_cliente'],$_POST['nif_cif'],$_POST['servicio'],$_POST['precio_sin_iva']);
echo $factura->ficha();