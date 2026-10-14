<?php
    if($_SERVER['REQUEST_METHOD']==='POST') {
        function sumarNumeros($num1, $num2, $num3, $num4, $num5) {
            $resultado = $num1 + $num2 + $num3 + $num4 +$num5;
            print("<h3>El resultado de sumar $num1 + $num2 + $num3 + $num4 +$num5 es: $resultado</h3>");
        }

        sumarNumeros(1,2,3,4,5);
    }

?>