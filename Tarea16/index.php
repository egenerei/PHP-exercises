<?php
// Función para calcular el área del rectángulo
function calcularArea($base, $altura) {
    return $base * $altura;
}

// Función para calcular el perímetro del rectángulo
function calcularPerimetro($base, $altura) {
    return 2 * ($base + $altura);
}

// Función para intercambiar los valores de la base y la altura
function intercambiarValores(&$base, &$altura) {
    $temp = $base;
    $base = $altura;
    $altura = $temp;
}

// Valores de la base y la altura
$base = 5;
$altura = 10;

// Calcular y mostrar el área y el perímetro
echo "Área del rectángulo: " . calcularArea($base, $altura) . "<br>";
echo "Perímetro del rectángulo: " . calcularPerimetro($base, $altura) . "<br>";

// Intercambiar los valores
intercambiarValores($base, $altura);

// Mostrar los valores intercambiados
echo "Después de intercambiar:<br>";
echo "Base: $base<br>";
echo "Altura: $altura<br>";

