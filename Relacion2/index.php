<?php
echo '<h1>Relación 2</h1>';
echo '<h2>1. Serie de Fibonacci</h2>';
echo'<h3> a. Crea una página que muestre los 100 primeros números de la serie de Fibonacci.</h3>';
    #Variable initialization
        $fibonacci = [0, 1]; #Array to store the data
    #Program
        for ($i = 2; $i < 100; $i++) { # Changed to < 20 to get the first 20 terms
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    #Output
        foreach ($fibonacci as $number) {
            echo $number . ' ';
        }

echo '</br>';
echo'<h3> b. Crea una función que muestre por pantalla los N primeros números de la serie de Fibonacci: function Fibonacci(N)</h3>';
    function fibonacci($number) { #function
        #Variable initialization
        $fibonacci = [0, 1];
        #Program
        for ($i = 2; $i < $number; $i++) { 
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        #Output
        foreach ($fibonacci as $i) {
            echo $i.'-';
        }          
    }
    fibonacci(20); #function call

echo '</br>';
echo'<h3> c. Crea una función que devuelva el elemento i de la serie de Fibonacci:;</h3>';
    function fibonacci_i($number){
        $fibonacci = [0,1];
        for ($i = 2; $i < $number; $i++){
            $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
        }
        return $fibonacci[$number-1];
    }

echo fibonacci_i(20);

echo '</br>';
echo '<h2>2. Diseña las siguientes funciones de cálculo geométrico:</h2>';
require_once 'functions.php';

$lado = 5; #Cuadrado de lado 5
echo'<h4> a. function Cuadrado_Perimetro(lado)</h4>';
echo "El perímetro del cuadrado es: ".cuadrado_perimetro($lado)."</br>";
echo'</br><h4> b. function Cuadrado_Area(lado)</h4>';
echo "El área del cuadrado es: ".cuadrado_area($lado)."</br>";

$lado1 = 4; #Rectángulo de lados 4 y 5
$lado2 = 5;
echo'</br><h4> c. function Rectangulo_Perimetro(lado1, lado2)</h4>';
echo "El perímetro del rectángulo es: ".rectangulo_perimetro($lado1, $lado2)."</br>";
echo'</br><h4> d. function Rectangulo_Area(lado1, lado2)</h4>';
echo "El área del rectángulo es: ".rectangulo_area($lado1, $lado2)."</br>";

$base = 7; #Triángulo de base 7 y altura 5
$altura = 5;
echo'</br><h4> e. function Triangulo_Rectangulo_Perimetro(base,altura)</h4>';
echo "El perímetro del triángulo rectángulo es: ".triangulo_rectangulo_perimetro($base, $altura)."</br>";
echo'</br><h4> f. function Triangulo_Rectangulo_Area(base,altura)</h4>';
echo "El área del triángulo rectángulo es: ".triangulo_rectangulo_area($base, $altura)."</br>";

$lado = 8; #Triángulo de lado 8
echo'</br><h4> g. function Triangulo_Equilatero_Perimetro(lado)</h4>';
echo "El perímetro del triángulo equilátero es: ".triangulo_equilatero_perimetro($lado)."</br>";
echo'</br><h4> h. function Triangulo_Equilatero_Area(lado)</h4>';
echo "El área del triángulo equilátero es: ".triangulo_equilatero_area($lado)."</br>";



#EJ 3
session_start();
if ($_SESSION['ran_num'] == null){
    $_SESSION['ran_num']  = rand(1,1000);
    $_SESSION['trys'] = 0;
    $_SESSION['user_num'] = [];
}


echo $_SESSION['ran_num'];
echo '</br>';
echo $_SESSION['trys'];
echo '</br>';
echo $_SESSION['user_num'];




