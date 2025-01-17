<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Relación 2</h1>
    <h2>1. Serie de Fibonacci</h2>
    <h3> a. Crea una página que muestre los 100 primeros números de la serie de Fibonacci.</h3>
    <?php
        #Inicialización de variables
            $fibonacci = [0, 1]; #Array para almacenar los números
        #Programa
            for ($i = 2; $i < 100; $i++) { 
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
        #Salida
            foreach ($fibonacci as $number) {
                echo $number . ' ';
            }
    ?>
    </br>
    <h3> b. Crea una función que muestre por pantalla los N primeros números de la serie de Fibonacci: function Fibonacci(N)</h3>
        <?php
            function fibonacci($number) { #Función
                #Inicialización de variables
                $fibonacci = [0, 1];
                #Programa
                for ($i = 2; $i < $number; $i++) { 
                    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }
                #Salida
                foreach ($fibonacci as $i) {
                    echo $i.'-';
                }          
            }
            fibonacci(20); #Llamada a función
        ?>
    </br>
    <h3> c. Crea una función que devuelva el elemento i de la serie de Fibonacci:;</h3>
    <?php
        function fibonacci_i($number){
            $fibonacci = [0,1];
            for ($i = 2; $i < $number; $i++){
                $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
            }
            return $fibonacci[$number-1];
        }

    echo fibonacci_i(20);
    ?>
    </br>
    <h2>2. Diseña las siguientes funciones de cálculo geométrico:</h2>
    <?php
    require_once 'functions.php'; #Inclusión de la librería de cálculo

    $lado = 5; #Cuadrado de lado 5
    ?>
    <h4> a. function Cuadrado_Perimetro(lado)</h4>
    <?php
    echo "El perímetro del cuadrado es: ".cuadrado_perimetro($lado);?>
    </br>
    <h4> b. function Cuadrado_Area(lado)</h4>
    <?php
    echo "El área del cuadrado es: ".cuadrado_area($lado);

    $lado1 = 4; #Rectángulo de lados 4 y 5
    $lado2 = 5; 
    ?>
    </br>
    <h4> c. function Rectangulo_Perimetro(lado1, lado2)</h4>
    <?php
    echo "El perímetro del rectángulo es: ".rectangulo_perimetro($lado1, $lado2);
    ?>
    </br>
    <h4> d. function Rectangulo_Area(lado1, lado2)</h4>
    <?php
    echo "El área del rectángulo es: ".rectangulo_area($lado1, $lado2);

    $base = 7; #Triángulo de base 7 y altura 5
    $altura = 5;
    ?>
    </br>
    <h4> e. function Triangulo_Rectangulo_Perimetro(base,altura)</h4>
    <?php
    echo "El perímetro del triángulo rectángulo es: ".triangulo_rectangulo_perimetro($base, $altura);
    ?>
    </br>
    <h4> f. function Triangulo_Rectangulo_Area(base,altura)</h4>
    <?php
    echo "El área del triángulo rectángulo es: ".triangulo_rectangulo_area($base, $altura);

    $lado = 8; #Triángulo de lado 8
    ?>
    </br>
    <h4> g. function Triangulo_Equilatero_Perimetro(lado)</h4>
    <?php
    echo "El perímetro del triángulo equilátero es: ".triangulo_equilatero_perimetro($lado)."</br>";
    ?>
    </br>
    <h4> h. function Triangulo_Equilatero_Area(lado)</h4>
    <?php
    echo "El área del triángulo equilátero es: ".triangulo_equilatero_area($lado)."</br>";
    ?>
    <h2>3. Adivina adivinanza</h2>
    <h4>Se genera un número aleatorio entre 0 y mil y se pide sucesivamente al usuario que intente acertarlo, indicando si el número es mayor o menor, se irán contando el número de intentos. Además del número de intentos, se guardarán los números indicados por el usuario y el par de la tirada</h4>

    <?php
    session_start(); #Necesario para poder guardar el numero que introducimos y usarlo para comparar con el número random, además de guardar también el número de intentos y el historial

    # Inicialización variables 
    if (!isset($_SESSION['numero'])) {
        $_SESSION['numero'] = rand(0, 1000); # Genera un número aleatorio entre 0 y 1000
        $_SESSION['intentos'] = 0;           # Contador de intentos
        $_SESSION['historial'] = [];         # Almacena intentos y resultados del usuario
    }

    $mensaje = "";
    $numero_usuario = null;

    # Verificar si el usuario envió un número usando el operador de fusión nula
    $numero_usuario = $_GET['numero'] ?? null;

    if ($numero_usuario !== null) { #Programa principal 
        # Incrementa el contador de intentos
        $_SESSION['intentos']++;

        # Compara el número de usuario con el número aleatorio
        if ($numero_usuario < $_SESSION['numero']) {
            $mensaje = "El número es más alto.";
        } elseif ($numero_usuario > $_SESSION['numero']) {
            $mensaje = "El número es más bajo.";
        } else {
            $mensaje = "¡Felicidades! Adivinaste el número: " . $_SESSION['numero'] . ". Lo intentaste " . $_SESSION['intentos'] . " veces.";
            # Reinicia el juego después de adivinar el número correctamente
            session_destroy();
        }

        # Guarda el número ingresado y el resultado en el historial de la sesión
        $_SESSION['historial'][] = [
            'numero' => $numero_usuario,
            'resultado' => $mensaje
        ];
    }
    ?>
    <!-- Muestra mensaje si hay y si el número de usuario no es correcto -->
    <?php 
        if ($mensaje && $numero_usuario != $_SESSION['numero']): 
    ?>
            <p><strong><?= $mensaje ?></strong></p>
    <?php 
        elseif ($mensaje && $numero_usuario == $_SESSION['numero']):
    ?>
            <p><strong><?= $mensaje ?></strong></p>
            <a href="">Jugar de Nuevo</a>
            <?php exit; 
            ?>
    <?php endif; 
    ?>

    <!-- Formulario para enviar el número de usuario -->
    <form method="GET">
        <label for="numero">Ingresa un número entre 0 y 1000:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <!-- Muestra historial de intentos -->
    <h2>Historial de Intentos</h2>
    <ul>
        <?php foreach ($_SESSION['historial'] as $intento): 
        ?>
            <li>Adivinaste <?= $intento['numero'] ?>: <?= $intento['resultado'] ?></li>
        <?php endforeach; 
        ?>
    </ul>

    <!-- Muestra el número de intentos -->
    <p>Total de intentos: <?= $_SESSION['intentos'] ?></p>

</body>
</html>



