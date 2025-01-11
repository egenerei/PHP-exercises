<?php

/*
 * Página que determina la figura selecciona en la página principal del proyecto
 * y remite a la página específica que pide los datos de la figura para después
 * procesarlos.
 * Incluye un botón para volver a la página principal.
 */

if (isset($_GET['figura'])) {

    $figura = $_GET['figura'];

    if (strcmp($figura, "circulo") == 0) {
        header("Location: pide/pideCirculo.html");
    } elseif (strcmp($figura, "cuadrado") == 0) {
        header("Location: pide/pideCuadrado.html");
    } elseif (strcmp($figura, "rectangulo") == 0) {
        header("Location: pide/pideRectangulo.html");
    } else {
        echo "Has elegido " . $figura . ", página en construcción.";
    }
} else {
    echo "Figura no seleccionada, imposible procesar.";
}
echo " <br> <br> 
       <form action=\"menuFigurasPlanas.html\" method=\"GET\">
          <input type=\"submit\" value=\"Volver\"> 
       </form>";
