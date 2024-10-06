<?php
function cuadrado_perimetro($lado) {
    return 4 * $lado;
}
function cuadrado_area($lado) {
    return $lado ** 2;
}
function rectangulo_perimetro($lado1, $lado2) {
    return $lado1 + $lado2;
}
function rectangulo_area($lado1, $lado2) {
    return $lado1 * $lado2;
}
function triangulo_rectangulo_perimetro($base, $altura) {
    return $base + $altura;
}
function triangulo_rectangulo_area($base, $altura) {
    return ($base * $altura) / 2;
}
function triangulo_equilatero_perimetro($lado) {
    return 3 * $lado;
}
function triangulo_equilatero_area($lado) {
    return ($lado ** 2) / (4 * tan(pI() / 6));
}