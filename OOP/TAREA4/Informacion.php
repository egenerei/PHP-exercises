<?php
session_start();
require_once("clases/departamento.php");
require_once("clases/empleado.php");

$departamento = unserialize ($_SESSION["departamento"]);

echo "<br>Gestión de departamento: " . $departamento->getNombre() . "<br>";
echo "Lista de Empleados:<br>";
foreach ($departamento->obtenerListaEmpleados() as $empleado) {
    echo $empleado->getNombre()."<br>";
}
echo "<br>Coste total de salarios en el departamento: " . $departamento->calcularCosteTotalSalarios() . " € <br>";
echo "<a href='Formulario.php'><button>Volver</button></a>";
