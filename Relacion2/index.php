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