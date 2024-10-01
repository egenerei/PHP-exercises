<?php
    #1 Given a number, return its absolute value as output.
    #Variable initialization
    $num = -4.5;
    $num_abs = $num;
    #Program
    if ($num < 0) { #Checks if the number is negative to multiply by -1
        $num_abs = $num * -1;
    }
    #Output
    echo 'The absolute value is: ', $num_abs;

    echo '</br>';
    #2 Given two numbers, return a message indicating the greater of the two.
    #Variable initialization
    $num1 = 7;
    $num2 = 0;
    #Program
    if ($num1 > $num2) { #Compares num1 with num2. If num1 is greater, outputs it
        echo $num1, ' is greater than ', $num2;
    } else { #By default, num2 will be greater (it can also indicate that they are equal)
        echo $num2, ' is greater than ', $num1;
    }
    
    echo '</br>';
    #3 Improve the previous code to show if both numbers are equal.
    #Variable initialization
    $num1 = 7;
    $num2 = 7;
    #Program
    if ($num1 > $num2) { #Compares num1 with num2. If num1 is greater, outputs it
        echo $num1, ' is greater than ', $num2;
    } else if ($num1 < $num2) { #Compares num1 with num2. If num2 is greater, outputs it
        echo $num2, ' is greater than ', $num1;
    } else { #If neither is greater than the other, they are equal
        echo $num2, ' is equal to ', $num1;
    }
    
    echo '</br>';
    #4 Given two numbers, return a message to show them ordered from smallest to largest.
    #Variable initialization
    $num1 = 4;
    $num2 = 8;
    #Program
    if ($num1 > $num2) { #Compares num1 with num2. If num1 is greater, it will be the first output
        echo $num1, ', ', $num2;
    } else { #By default, num2 will appear first, whether it is greater or equal to num1
        echo $num2, ', ', $num1;
    }
    
    echo '</br>';
    #5 Given a year, return a message indicating if it is a leap year or not. Leap years are those that are divisible by 4, except those that are divisible by 100 without being divisible by 400.
    #Variable initialization
    $ano = 1700;
    #Program
    if ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) {
        echo $ano, ' is a leap year';
    } else {
        echo $ano, ' is not a leap year';
    }
    
    echo '</br>';
    #6 Return the sum of the numbers from 1 to 100.
    #Variable initialization
    $suma = 0; 
    #Program
    for ($i = 1; $i <= 100; $i++) {
        $suma += $i;
    }
    #Output
    echo $suma;

    echo '</br>';
    #7 Return the factorial of 10.
    #Variable initialization
    $num = 10;
    $factorial = 1; # Changed to 1 for correct factorial calculation
    #Program
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    #Output
    echo $factorial;

    echo '</br>';
    #8 Given an integer, return all its divisors.
    #Variable initialization
    $num = 10;
    #Program
    echo 'Divisors of ' . $num . ': ';
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo $i . ' ';
        }
    }

    echo '</br>';
    #9 Given an integer, return a message to indicate whether it is prime or not.
    #Variable initialization
    $num = 11;
    $num_divisores = 0;
    #Program
    if ($num > 1) {
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $num_divisores++;
            }
        }
        if ($num_divisores == 2) { # Changed to comparison ==
            echo 'The number is prime';
        } else {
            echo 'Not prime';
        }
    }

    echo '</br>';
    #10 Get the first 20 terms of the Fibonacci sequence. This sequence starts with 0 and 1, and the rest of the terms can be calculated by adding the two previous ones.
    #Variable initialization
    $fibonacci = [0, 1]; #Array to store the data
    #Program
    for ($i = 2; $i < 20; $i++) { # Changed to < 20 to get the first 20 terms
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    #Output
    foreach ($fibonacci as $number) {
        echo $number . ' ';
    }
