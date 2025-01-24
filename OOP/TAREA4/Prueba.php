<?php
// Incluir las clases
require_once 'clases/empleado.php';
require_once 'clases/departamento.php';

// Crear empleados
$empleado1 = new Empleado(1, "Juan Perez", 50000);
$empleado2 = new Empleado(2, "Maria Rodriguez", 60000);

// Crear departamento
$departamentoIT = new Departamento("IT");

// Contratar empleados
$departamentoIT->contratarEmpleado($empleado1);
$departamentoIT->contratarEmpleado($empleado2);

// Aumentar salario en un 10%
$empleado1->aumentarSalario(10);

// Mostrar información
echo "Empleado 1: " . $empleado1->getNombre() . " - Salario: " . $empleado1->getSalario() . " € <br>";
echo "Empleado 2: " . $empleado2->getNombre() . " - Salario: " . $empleado2->getSalario() . " € <br>";

echo "<br>Departamento: " . $departamentoIT->getNombre() . "<br>";
echo "Lista de Empleados:<br>";
foreach ($departamentoIT->obtenerListaEmpleados() as $empleado) {
    echo "- " . $empleado->getNombre() . " - Salario: " . $empleado->getSalario() . " € <br>";
}

echo "<br>Costo total de salarios en el departamento: " . $departamentoIT->calcularCosteTotalSalarios() . " € <br>";

