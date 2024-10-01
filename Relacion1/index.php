<?php
    #1 Dado un número, devolver su valor absoluto como una salida. 
    $num= 4.5;
    if ($num < 0){
        $num_abs = $num * -1;
    }
    echo 'El valor absoluto es: ',$num;

    #2 Dados dos números, devolver un mensaje que indique el mayor de los dos.
    $num1= 7;
    $num2= 0;
    if ($num1 > $num2) {
        echo $num1,' es mayor que ',$num2;
    } 
    else {
        echo $num2,' es mayor que ',$num1;
    }
    
    #3 Mejora el código anterior para mostrar si ambos números son iguales. 
    $num1= 7;
    $num2= 7;
    if ($num1 > $num2) {
        echo $num1,' es mayor que ',$num2;
    } 
    else if ($num1 < $num2){
        echo $num2,' es mayor que ',$num1;
    }
    else {
        echo $num2,' es igual a ',$num1;
    }
    
    #4 Dados dos números, devolver un mensaje para mostrarlos ordenados del más pequeño al más grande. 
    $num1 = 4;
    $num2 = 8;
    if ($num1 > $num2) {
        echo $num1, $num2;
    } 
    else {
        echo $num2, $num1;
    }
    
    #5 Dado un año, devolver un mensaje para indicar si es bisiesto o no. Los años bisiestos son aquellos que son divisibles por 4, excepto aquellos que son divisibles por 100 sin ser por 400. 
    $ano = 1700;
    if ($ano % 4 == 0 and ($ano % 100 != 0 or  $ano % 400 == 0)) {
        echo $ano, ' es bisiesto';
    } 
    else{
        echo $ano, ' no es bisiesto';
    }
    
    #6 Devolver la suma de los números del 1 al 100.
    $suma = 0; 
    for ($i = 1; $i <= 100; $i++){
        $suma += $i;
    }
    echo $suma;

    #7 Devolver el factorial de 10. 
    $num = 10;
    $factorial = $num;
    for ($i = 1; $i < $num; $i++){
        $factorial = $factorial * $i;
    }
    echo $factorial;

    #8 Dado un entero, devolver todos sus divisores. 
    $num = 10;
    for ($i = 1; $i <= $num; $i++){
        if ($num % $i == 0){
            echo $i;
        }
    }

    #9 Dado un entero, devolver un mensaje para señalar si es primo o no. 
    $num = 11;
    $num_divisores = 0;
    if ($num > 1){
        for ($i = 1;$i <= $num;$i++){
            if ($num % $i == 0){
                $num_divisores++;
            }
        }
        if ($num_divisores = 2){
            echo 'El número es primo';
        }
        else {
            echo 'No es primo';
        }
    }

    #10 Obtener los primeros 20 términos de la secuencia de Fibonacci. Esta secuencia comienza por 0 y 1, y el resto de los términos se pueden calcular sumando los dos anteriores. 
    $num1 = 0;
    $num2 = 1;
    array();
    for ($i = 1; $i <= 18; $i++){
        

    }
    