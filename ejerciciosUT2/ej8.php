<?php
    // Defino dos decimales
    $x = 2.3;
    $y = 3.7;

    // Muestro sus valores por pantalla
    echo("Valor de x: ".$x."<br>");
    echo("Valor de y: ".$y."<br>");

    // Intercambio los valores de las variables
    $aux = $x;
    $x = $y;
    $y = $aux;

    // Muestro los valores intercambiados
    echo("Valor de x(intercambiado): ".$x."<br>");
    echo("Valor de y(intercambiado): ".$y."<br>");

?>