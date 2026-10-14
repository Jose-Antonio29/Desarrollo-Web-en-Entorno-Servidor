<?php
    // Declaración de variables
    $precio = 34;
    $descuento = 15;

    // Muestro el precio original y el descuento a aplicar por pantalla
    echo("Precio del producto: ".$precio."€ <br>");
    echo("Descuento a aplicar: ".$descuento."% <br><br>");

    // Calculamos el precio final
    $precioF = $precio - ($precio * ($descuento / 100));

    // Mostramos el precio final por pantalla
    echo("Precio final: ".$precioF."€");
?>