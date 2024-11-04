<?php
// Ejercicio 8
// Crea un script que que defina un array asociativo con nombres de tres personas como claves y sus edades
// como valores. Posteriormente, debe imprimir el nombre y la edad de cada persona en una línea
$personas = array("jose" => 43,"alba" => 54,"rosa" => 54);
foreach ($personas as $key => $value) {
    echo $key. " tiene ".$value." años. </br>";
}


//9
function saludo($nombre){
    return "Hola, ". $nombre.".";
}

echo saludo("Jorge");

echo "</br>";
//11 
function primo($num){
    $primo = true;
    if ($num < 1){
        $primo = "No es un número válido";
    }
    for ($i = 2;$i < ($num/2);$i++)
        if ($num % $i == 0){
           $primo = false; 
        }
    return $primo;
    }
print_r (primo(11));
    
echo "</br>";

//13
$frase = "La noche es oscura y llena de estrellas, la noche nos envuelve con su misterio, la noche es 
un momento perfecto para reflexionar.";  

function elimina_pal($cadena,$eliminar){
    return str_replace($eliminar,"***",$cadena);
}

echo elimina_pal($frase,"noche");

echo "</br>";
//14
$fechaFutura = new DateTime('2024-12-31');

$diferencia = date_diff($fechaFutura, new DateTime());

echo "Diferencia en días: " . $diferencia->days;

echo "</br>";
//15
$num_media = array(1,3,5,7,8,9,2,231,55);

function media_array($array){
    $suma = 0;
    foreach ($array as $value) {
        $suma += $value;
    }
    return $suma/count($array);
}

echo media_array($num_media);
echo "</br>";
//16
$num_mayor = array(1,3,5,7,8,9,2,231,555);

function mayor($array){
    $mayor = $array[0];
    foreach ($array as $value) {
        if ($value > $mayor){
            $mayor = $value;
        }
    }
    return $mayor;
}

echo mayor($num_mayor);
echo "</br>";

//17
$personas = array(array("jose",23,"Granada"),array("pepe",244,"Murcia"),array("joselu",44,"Granada"),array("pred",4,"Murcia"));

function ciudad($array){
    $ciudades = [];
    foreach ($array as $value) {
        if (in_array($value[2],$ciudades)){
            $ciudades[$value[2]][] = array($value[0],$value[1]); 
        }
        else {
            $ciudades[$value[2]][] = array($value[0],$value[1]);
        }
    }
    return $ciudades;
}

print_r( ciudad($personas));

echo "</br>";
//18
$nombre= "Jose Perez Lopez";

function iniciales($array){
    $iniciales = "";
    for ($i= 0; $i< strlen($array); $i++) {
        if (ctype_upper($array[$i])){
            $iniciales .= $array[$i];
            }
        }
    return $iniciales;
}

echo iniciales($nombre);

echo "</br>";

//19
$numeros = array(1,4,5,2435464,3453,24234,2341,12,45);
sort($numeros);
print_r($numeros);
echo "</br>";
rsort($numeros);
print_r ($numeros);

echo "</br>";

//21
$empleados = [
    ["nombre" => "Juan Pérez", "fecha_nacimiento" => "1980-05-15", "salario_mensual" => 2000, "fecha_ingreso" => "2010-06-01", "ciudad" => "Madrid"],
    ["nombre" => "Ana López", "fecha_nacimiento" => "1992-11-22", "salario_mensual" => 2500, "fecha_ingreso" => "2015-03-15", "ciudad" => "Barcelona"],
    ["nombre" => "Carlos García", "fecha_nacimiento" => "1975-08-30", "salario_mensual" => 3000, "fecha_ingreso" => "2008-10-10", "ciudad" => "Sevilla"],
    ["nombre" => "Elena Ruiz", "fecha_nacimiento" => "1985-02-18", "salario_mensual" => 2800, "fecha_ingreso" => "2012-07-20", "ciudad" => "Valencia"],
    ["nombre" => "Mario Martínez", "fecha_nacimiento" => "1990-07-05", "salario_mensual" => 2400, "fecha_ingreso" => "2016-04-10", "ciudad" => "Bilbao"],
    ["nombre" => "Laura Gómez", "fecha_nacimiento" => "1988-12-12", "salario_mensual" => 2200, "fecha_ingreso" => "2011-01-15", "ciudad" => "Madrid"],
    ["nombre" => "Sergio Torres", "fecha_nacimiento" => "1982-09-21", "salario_mensual" => 2600, "fecha_ingreso" => "2009-11-01", "ciudad" => "Málaga"],
    ["nombre" => "Isabel Fernández", "fecha_nacimiento" => "1995-05-14", "salario_mensual" => 2700, "fecha_ingreso" => "2017-06-25", "ciudad" => "Zaragoza"],
    ["nombre" => "Ricardo Ortega", "fecha_nacimiento" => "1978-03-03", "salario_mensual" => 3200, "fecha_ingreso" => "2005-08-15", "ciudad" => "Murcia"],
    ["nombre" => "Patricia Sánchez", "fecha_nacimiento" => "1991-01-30", "salario_mensual" => 2900, "fecha_ingreso" => "2018-09-10", "ciudad" => "Barcelona"]
];

require "functions.php";

echo calcular_edad($empleados[0]);
echo "</br>";
echo salario_anual($empleados[0]);
echo "</br>";
echo veterano($empleados[0]);

echo "</br>";
echo iniciales_2($empleados[2]);
echo "</br>";

echo "</br>";

echo "</br>";

echo "</br>";

