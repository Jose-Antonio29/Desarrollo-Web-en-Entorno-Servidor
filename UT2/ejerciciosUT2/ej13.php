<?php
    // Defino la constante de cambio de dinero
    define("CAMBIO", 0.87);

    // Declaración de variables
    $euros = 12.57;
    $euros2 = 24;
    $dolares = 23.53;
    $dolares2 = 15;

    // Mostramos valores convertidos por pantalla
    echo("Conversión de euros a dolares:<br>");
    echo("Cantidad: ".$euros."€ --> ". round(($euros/CAMBIO), 2)."$<br>");
    echo("Cantidad: ".$euros2."€ --> ".round(($euros2/CAMBIO), 2)."$<br><br>");

    echo("Conversión de dolares a euros:<br>");
    echo("Cantidad: ".$dolares."$ --> ".round(($dolares*CAMBIO), 2)."€<br>");
    echo("Cantidad: ".$dolares2."$ --> ".round(($dolares2*CAMBIO), 2)."€<br>");
?>